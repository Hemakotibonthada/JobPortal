document.addEventListener('DOMContentLoaded', function() {
    // Fetch job listings
    fetch('get_jobs.php')
        .then(response => response.json())
        .then(data => {
            const jobListings = document.getElementById('job-listings');
            data.forEach(job => {
                const jobDiv = document.createElement('div');
                jobDiv.classList.add('job');
                jobDiv.innerHTML = `
                    <h3>${job.title}</h3>
                    <p>${job.description}</p>
                    <p>Company: ${job.company}</p>
                    <p>Location: ${job.location}</p>
                    <p>Salary: ${job.salary}</p>
                    <p>Date Posted: ${job.date_posted}</p>
                `;
                jobListings.appendChild(jobDiv);
            });
        });

    // Register form submission
    document.getElementById('register-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('register.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            this.reset();
        });
    });

    // Login form submission
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            this.reset();
        });
    });
});
