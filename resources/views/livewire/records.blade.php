<div>
    <div class="container mt-5">
        <h1 class="mb-4">Financial Health Calculator</h1>

        <form id="financialForm">
            <!-- Your form elements go here (same as the previous example) -->
        </form>

        <div class="mt-4">
            <h3>Result</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Metric</th>
                    <th>Score</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Disposable Income</td>
                    <td id="disposableIncome">-</td>
                </tr>
                <tr>
                    <td>Debt-to-Income Ratio</td>
                    <td id="debtToIncomeRatio">-</td>
                </tr>
                <tr>
                    <td>Savings Rate</td>
                    <td id="savingsRate">-</td>
                </tr>
                <tr>
                    <td>Net Worth</td>
                    <td id="netWorth">-</td>
                </tr>
                </tbody>
            </table>
            <p id="financialHealthScore">Financial Health Score: <span id="scoreValue">-</span></p>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js before the closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e3+5nB0SzZVnm5c7iH1Y/40I3pZl+f8mKe6D+jQpBEjWhHho/pqHFlZqfc29qSPd" crossorigin="anonymous"></script>

    <script>
        function calculateFinancialHealth() {
            // Retrieve form data
            const formData = new FormData(document.getElementById('financialForm'));

            // Perform AJAX request to your Laravel backend or call the backend API
            // ...

            // For now, let's log the form data to the console
            console.log(Object.fromEntries(formData));

            // Update table values with dummy data (replace with actual scores from the backend)
            document.getElementById('disposableIncome').innerText = '75';
            document.getElementById('debtToIncomeRatio').innerText = '80';
            document.getElementById('savingsRate').innerText = '90';
            document.getElementById('netWorth').innerText = '85';
            document.getElementById('scoreValue').innerText = '83.75';
        }
    </script>

</div>
