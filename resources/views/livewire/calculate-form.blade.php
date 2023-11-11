<div>
    <h1 class="mb-4">Financial Health Calculator</h1>

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
                    <label for="debts" class="form-label">Debts</label>
                    <input wire:model="debts" type="number" class="form-control" id="debts" name="debts" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="assets" class="form-label">Assets</label>
                    <input wire:model="assets" type="number" class="form-control" id="assets" name="assets" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    @if($columnChartModel)
        <div class="mt-4 text-center">
            <div class="h3">Financial Health Score: {{$financialHealthScore}}%</div>
        </div>
        <div style="height: 32rem;">
            <livewire:livewire-column-chart
                key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel"
            />
        </div>
    @endif


<!-- Add Bootstrap JS and Popper.js before the closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</div>
