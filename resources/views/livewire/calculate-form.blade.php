<div>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Financial Health Calculator</h1>
        <a wire:navigate href="{{route('records')}}" class="btn btn-primary">Records</a>
    </div>


    <form wire:submit.prevent="calculateFinancialHealth" id="financialForm">

        <div class="mb-3">
            <label for="businessName" class="form-label">Business Name</label>
            <input wire:model="business_name" type="text" class="form-control" id="businessName" name="business_name" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="monthlyIncome" class="form-label">Monthly Income</label>
                    <input wire:model="monthly_income" type="number" class="form-control" id="monthlyIncome" name="monthly_income" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="monthlyExpenses" class="form-label">Monthly Expenses</label>
                    <input wire:model="monthly_expenses" type="number" class="form-control" id="monthlyExpenses" name="monthly_expenses" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="debts" class="form-label">Monthly Debts</label>
                    <input wire:model="debts" type="number" class="form-control" id="debts" name="debts" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="assets" class="form-label">Monthly Assets</label>
                    <input wire:model="assets" type="number" class="form-control" id="assets" name="assets" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Calculate
            <div wire:loading>
                <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>

{{--        <button wire:click="resetFields" class="btn btn-primary">Reset--}}
{{--            <div wire:loading>--}}
{{--                <div class="spinner-grow spinner-grow-sm" role="status">--}}
{{--                    <span class="visually-hidden">Loading...</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </button>--}}
    </form>

    @if($columnChartModel)
        <div class="mt-4 text-center">
            <div class="h1">Financial Health Score: {{number_format($financialHealthScore,2)}}%</div>
            <div>
                @if($financialHealthScore >= 80)
                    <div class="text-success">Excellent</div>
                @elseif($financialHealthScore >= 50)
                    <div class="text-primary">Good</div>
                @elseif($financialHealthScore >= 30)
                    <div class="text-warning">Average</div>
                @else
                    <div class="text-danger">Poor</div>
                @endif
            </div>

            <div>
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
        <div style="height: 32rem;">
            <livewire:livewire-column-chart
                key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel"
            />
        </div>

        <div class="my-4">
            <h1>How your Score gets calculated?</h1>
            <p>Financial Health Score is calculated based on the following formula:</p>
            <pre>
                Calculate Disposable Income:
                    Disposable Income = Monthly Income - Monthly Expenses

                Evaluate Debt-to-Income Ratio:
                    Debt-to-Income Ratio = (Total Debts / Monthly Income) * 100

                Assess Savings Rate:
                    Savings Rate = ((Monthly Income - Monthly Expenses) - Total Debts) / Monthly Income * 100

                Calculate Net Worth:
                    Net Worth = Total Assets - Total Debts

                Create a Weighted Scoring System:

                    Assign weights to each metric based on importance. For example:
                        Disposable Income: 30%
                        Debt-to-Income Ratio: 25%
                        Savings Rate: 20%
                        Net Worth: 25%

                Normalize Scores:
                    Normalize each metric's score to a common scale (e.g., 0 to 100).

                Calculate the Financial Health Score:
                    Financial Health Score = (Weighted Score for Disposable Income) + (Weighted Score for Debt-to-Income Ratio) + (Weighted Score for Savings Rate) + (Weighted Score for Net Worth)
            </pre>
        </div>
    @endif


<!-- Add Bootstrap JS and Popper.js before the closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</div>
