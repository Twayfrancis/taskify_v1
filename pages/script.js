function showTaskDetails(title, description, priority) {
        var modal = document.getElementById("taskModal");
        var modalTitle = modal.querySelector(".modal-title");
        var modalBody = modal.querySelector(".modal-body");

        modalTitle.textContent = title;
        modalBody.innerHTML = "<p><strong>Description:</strong> " + description + "</p>" +
                              "<p><strong>Priority:</strong> " + priority + "</p>";

        modal.style.display = "block";
    }

    function hideTaskDetails() {
        var modal = document.getElementById("taskModal");
        modal.style.display = "none";
    }
