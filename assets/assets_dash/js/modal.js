function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

function saveData() {
    // Add your logic to save the input data here
    var inputData = document.getElementById("inputData").value;
    alert("Data saved: " + inputData);
    closeModal();
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    if (event.target == document.getElementById("myModal")) {
        closeModal();
    }
}