<div>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Financial Health Calculator</h1>

        <div>
            <a wire:navigate href="{{route('records')}}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3"></path>
                    <path d="M4 6v6c0 1.657 3.582 3 8 3m8 -3.5v-5.5"></path>
                    <path d="M4 12v6c0 1.657 3.582 3 8 3"></path>
                    <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M20.2 20.2l1.8 1.8"></path>
                </svg>
                Records
            </a>
            <a href="https://github.com/imerfanahmed/FHIT" class="btn btn-primary" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5.315 2.1c.791 -.113 1.9 .145 3.333 .966l.272 .161l.16 .1l.397 -.083a13.3 13.3 0 0 1 4.59 -.08l.456 .08l.396 .083l.161 -.1c1.385 -.84 2.487 -1.17 3.322 -1.148l.164 .008l.147 .017l.076 .014l.05 .011l.144 .047a1 1 0 0 1 .53 .514a5.2 5.2 0 0 1 .397 2.91l-.047 .267l-.046 .196l.123 .163c.574 .795 .93 1.728 1.03 2.707l.023 .295l.007 .272c0 3.855 -1.659 5.883 -4.644 6.68l-.245 .061l-.132 .029l.014 .161l.008 .157l.004 .365l-.002 .213l-.003 3.834a1 1 0 0 1 -.883 .993l-.117 .007h-6a1 1 0 0 1 -.993 -.883l-.007 -.117v-.734c-1.818 .26 -3.03 -.424 -4.11 -1.878l-.535 -.766c-.28 -.396 -.455 -.579 -.589 -.644l-.048 -.019a1 1 0 0 1 .564 -1.918c.642 .188 1.074 .568 1.57 1.239l.538 .769c.76 1.079 1.36 1.459 2.609 1.191l.001 -.678l-.018 -.168a5.03 5.03 0 0 1 -.021 -.824l.017 -.185l.019 -.12l-.108 -.024c-2.976 -.71 -4.703 -2.573 -4.875 -6.139l-.01 -.31l-.004 -.292a5.6 5.6 0 0 1 .908 -3.051l.152 -.222l.122 -.163l-.045 -.196a5.2 5.2 0 0 1 .145 -2.642l.1 -.282l.106 -.253a1 1 0 0 1 .529 -.514l.144 -.047l.154 -.03z" stroke-width="0" fill="currentColor"></path>
                </svg>
                Github Link
            </a>

        </div>




    </div>


    <form class="border border-1 rounded rounded-2 shadow p-3" wire:submit.prevent="calculateFinancialHealth" id="financialForm">

        <div class="mb-3">
            <label for="businessName" class="form-label">Business Name</label>
            <input wire:model="business_name" placeholder="John Doe Company" type="text" class="form-control" id="businessName" name="business_name" required>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="monthlyIncome" class="form-label">Monthly Income</label>
                    <input wire:model="monthly_income" placeholder="25000" type="number" class="form-control" id="monthlyIncome" name="monthly_income" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="mb-3">
                    <label for="monthlyExpenses" class="form-label">Monthly Expenses</label>
                    <input wire:model="monthly_expenses" placeholder="12000" type="number" class="form-control" id="monthlyExpenses" name="monthly_expenses" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="mb-3">
                    <label for="debts" class="form-label">Monthly Debts</label>
                    <input wire:model="debts" placeholder="2000" type="number" class="form-control" id="debts" name="debts" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="mb-3">
                    <label for="assets" class="form-label">Monthly Assets</label>
                    <input wire:model="assets" placeholder="5000" type="number" class="form-control" id="assets" name="assets" required>
                </div>
            </div>
        </div>

        <div class="row">



        </div>
        <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calculator" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 3m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                <path d="M8 7m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z"></path>
                <path d="M8 14l0 .01"></path>
                <path d="M12 14l0 .01"></path>
                <path d="M16 14l0 .01"></path>
                <path d="M8 17l0 .01"></path>
                <path d="M12 17l0 .01"></path>
                <path d="M16 17l0 .01"></path>
            </svg>
            Calculate
            <div wire:loading>
                <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>
    </form>

    @if($columnChartModel)
        <div class="mt-4 text-center">
            <div class="h1">Financial Health Score: {{number_format($financialHealthScore,2)}}%</div>
            <div class="mt-2">
                @if($financialHealthScore >= 80)
                    <div class="badge h1 bg-success">Excellent</div>
                @elseif($financialHealthScore >= 50)
                    <div class="badge h1 bg-primary">Good</div>
                @elseif($financialHealthScore >= 30)
                    <div class="badge h1 bg-warning">Average</div>
                @else
                    <div class="badge h1 bg-danger">Poor</div>
                @endif
            </div>

            <div class="mt-2">
                @if($financialHealthScore >= 80)
                    <div class="text-success">You are in an exceptional financial position. Keep it up!</div>
                @elseif($financialHealthScore >= 50)
                    <div class="text-primary">You are in a good financial position. Keep it up!</div>
                @elseif($financialHealthScore >= 30)
                    <div class="text-warning">You are in an average financial position. You can do better!</div>
                @else
                    <div class="text-danger">You are in a poor financial position. You need to improve!</div>
                @endif
            </div>
        </div>

    <div class="row mt-3 border border-2 rounded rounded-2">
        <div class="col-md-6 p-3">
            <div class="card p-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Metric</th>
                        <th>Result</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Disposable Income</td>
                        <td>{{ $normalizedScores['disposable_income'] }}%</td>
                    </tr>
                    <tr>
                        <td>Debt-to-Income Ratio</td>
                        <td>{{ $normalizedScores['debt_to_income_ratio'] }}%</td>
                    </tr>
                    <tr>
                        <td>Savings Rate</td>
                        <td>{{ $normalizedScores['savings_rate'] }}%</td>
                    </tr>
                    <tr>
                        <td>Net Worth</td>
                        <td>{{ $normalizedScores['net_worth'] }}%</td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="mt-4">
                <h3>Improvement Strategies</h3>
                <ul>
                    <li><strong>Increase Disposable Income:</strong> Explore opportunities to boost your income through additional sources or side projects.</li>
                    <li><strong>Manage Debt:</strong> Develop a plan to reduce high-interest debts and avoid taking on unnecessary new debts.</li>
                    <li><strong>Enhance Savings Rate:</strong> Set up a budget to increase savings by cutting unnecessary expenses and finding ways to save more consistently.</li>
                    <li><strong>Grow Net Worth:</strong> Consider investment opportunities that align with your financial goals to increase your assets.</li>
                </ul>
            </div>

            <div class="mt-4">
                <h3>Where to Find Help</h3>
                <p>If you need assistance or advice on improving your financial health, consider reaching out to the following resources:</p>
                <ul>
                    <li><strong>Financial Advisors:</strong> Consult with a certified financial advisor for personalized guidance.</li>
                    <li><strong>Community Workshops:</strong> Attend local workshops on financial literacy and budgeting.</li>
                    <li><strong>Online Resources:</strong> Explore reputable financial websites and blogs for educational content.</li>
                    <li><strong>Government Programs:</strong> Check for government-sponsored programs that offer financial assistance or counseling.</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 text-center align-items-center">
            <div style="height: 40rem;">
                <livewire:livewire-column-chart
                    key="{{ $columnChartModel->reactiveKey() }}"
                    :column-chart-model="$columnChartModel"
                />
            </div>
            <div class="h1 my-3">Financial Health Score: {{number_format($financialHealthScore,2)}}%</div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="container mt-5">
                <h1 class="mb-4">Financial Definitions</h1>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Debt-to-Income Ratio</h2>
                        <p class="card-text">
                            The debt-to-income ratio is a financial metric that measures the percentage of a person's gross income used to cover monthly debt obligations. It is calculated by dividing total monthly debt payments by gross monthly income. Lenders often use this ratio to assess an individual's ability to manage additional debt and make informed decisions about lending.
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Disposable Income</h2>
                        <p class="card-text">
                            Disposable income refers to the amount of money an individual or household has available for spending and saving after deducting taxes and necessary expenses from their total income. It provides a practical measure of financial flexibility, indicating the funds available for discretionary spending, investments, and savings.
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Net Worth</h2>
                        <p class="card-text">
                            Net worth is the difference between a person's assets (what they own) and liabilities (what they owe). It represents the individual's overall financial position and wealth. Net worth is a key indicator of financial health, reflecting one's ability to build wealth and withstand economic challenges.
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Savings Rate</h2>
                        <p class="card-text">
                            The savings rate is the percentage of income that an individual or household saves rather than spends. It is calculated by dividing the amount saved by the total income. A higher savings rate indicates a greater capacity to build wealth, prepare for future expenses, and create a financial safety net.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="container mt-5">
                <h1 class="mb-4">Financial Health Score Calculation</h1>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Calculate Disposable Income</h2>
                        <p class="card-text">
                            Disposable Income = Monthly Income - Monthly Expenses
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Evaluate Debt-to-Income Ratio</h2>
                        <p class="card-text">
                            Debt-to-Income Ratio = (Total Debts / Monthly Income) * 100
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Calculate Savings Rate</h2>
                        <p class="card-text">
                            Savings Rate = ((Monthly Income - Monthly Expenses) - Total Debts) / Monthly Income * 100
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Calculate Net Worth</h2>
                        <p class="card-text">
                            Net Worth = Total Assets - Total Debts
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Create a Weighted Scoring System</h2>
                        <p class="card-text">
                            Assign weights to each metric based on importance. For example: Disposable Income: 30%, Debt-to-Income Ratio: 25%, Savings Rate: 20%, Net Worth: 25%
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Normalize Scores</h2>
                        <p class="card-text">
                            Normalize each metric's score to a common scale (e.g., 0 to 100).
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Calculate Financial Health Score</h2>
                        <p class="card-text">
                            Financial Health Score = (Weighted Score for Disposable Income) + (Weighted Score for Debt-to-Income Ratio) + (Weighted Score for Savings Rate) + (Weighted Score for Net Worth)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>








</div>

    @endif


<!-- Add Bootstrap JS and Popper.js before the closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</div>
