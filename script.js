document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    const registrationForm = document.getElementById("registrationForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function(event) {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (!username || !password) {
                alert("Please fill in all fields.");
                event.preventDefault();
            }
        });
    }

    if (registrationForm) {
        registrationForm.addEventListener("submit", function(event) {
            const firstName = document.getElementById("firstName").value;
            const lastName = document.getElementById("lastName").value;
            const dob = document.getElementById("dob").value;
            const phoneNumber = document.getElementById("phoneNumber").value;
            const email = document.getElementById("email").value;
            const collegeName = document.getElementById("collegeName").value;
            const course = document.getElementById("course").value;
            const stream = document.getElementById("stream").value;
            const semester = document.getElementById("semester").value;
            const skills = document.getElementById("skills").value;
            const resume = document.getElementById("resume").files.length;
            const address = document.getElementById("address").value;
            const backlogYes = document.getElementById("backlogYes").checked;
            const backlogNo = document.getElementById("backlogNo").checked;

            if (!firstName || !lastName || !dob || !phoneNumber || !email || !collegeName || !course || !stream || !semester || !skills || !resume || !address || (!backlogYes && !backlogNo)) {
                alert("Please fill in all fields.");
                event.preventDefault();
            }
        });
    }
});
