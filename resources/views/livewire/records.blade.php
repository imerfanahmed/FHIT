<div class="my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Previously Calculated Data</h1>
        <a wire:navigate href="{{route('home')}}" class="btn btn-secondary">Back</a>
    </div>
    <table class="table table-striped my-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Business Name</th>
            <th>Income</th>
            <th>Expense</th>
            <th>Assets</th>
            <th>Debts</th>
            <th>Financial Score</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{$record->id}}</td>
                <td>{{$record->business_name}}</td>
                <td>{{$record->income}}</td>
                <td>{{$record->expense}}</td>
                <td>{{$record->debts}}</td>
                <td>{{$record->assets}}</td>
                <td>{{$record->FinancialHealthScore}}</td>
            </tr>
        @endforeach

        <!-- Add more rows as needed -->
        </tbody>
    </table>

</div>
