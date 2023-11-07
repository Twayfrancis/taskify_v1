<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('../db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["delete_account"])) {
            // Process delete account action
            $password = $_POST["delete_account_password"];
            
            // user's id stored in the session
            $user_id = $_SESSION['user_id'];
           
            // retrieve the hashed password from the database
            $query = "SELECT password_hash FROM Users WHERE user_id = $user_id";
            $result = $conn->query($query);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $hashed_password = $row["password_hash"];

                // verify the provided password against the hashed password
                if (password_verify($password, $hashed_password)) {
                    // Password is valid, perform deletion
                    $delete_sql = "DELETE FROM Users WHERE user_id = $user_id";
                    if ($conn->query($delete_sql) === TRUE) {
                        // Account deleted successfully
                        // Clear the session and redirect to index.php or a confirmation page     
                        session_unset();
                        session_destroy();
                        // Redirect user after account deletion
                        header("Location: ../pages/signup.php");
                        exit();
                    } else {
                        throw new Exception("Error deleting account: " . $conn->error);
                    }
                } else {
                    throw new Exception("Invalid password for account deletion.");
                }
            } else {
                throw new Exception("Error fetching user data.");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    if (isset($_POST["reset_password"])) {
            // Process password reset action
            $current_password = $_POST["current_password"];
            $new_password = $_POST["new_password"];
            $confirm_password = $_POST["confirm_password"];

            // check if new password matches confirm password
            if ($new_password == $confirm_password) {
                // hash the new password
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
                $user_id = $_SESSION['user_id'];
                // update the password in the database
                $update_sql = "UPDATE Users SET password_hash = '$hashed_password' WHERE user_id = $user_id";

                if ($conn->query($update_sql) === TRUE) {
                    // password updated successfully
                    // Redirect user after password reset
                    header("Location: ../pages/settings.php");
                    exit();
                } else {
                    throw new Exception("Error updating password: " . $conn->error);
                }
            } else {
                throw new Exception("New password and confirm password do not match.");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Close database connection
//$conn->close();

?>

