document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('resultForm');
    const resultsTable = document.getElementById('resultsTable');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        try {
            const response = await fetch('submit_result.php', {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            const result = await response.json();
            if (result.success) {
                alert('Result submitted successfully!');
                form.reset();
                displayResults();
            } else {
                alert('Error submitting result.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while submitting the result.');
        }
    });

    async function displayResults() {
        try {
            const response = await fetch('get_results.php');
            const results = await response.json();

            let html = '<table>';
            html += '<tr><th>Name</th><th>Roll Number</th><th>Subject</th><th>Marks</th></tr>';
            results.forEach(result => {
                html += `<tr><td>${result.name}</td><td>${result.roll_number}</td><td>${result.subject}</td><td>${result.marks}</td></tr>`;
            });
            html += '</table>';

            resultsTable.innerHTML = html;
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while fetching results.');
        }
    }

    displayResults();
});
