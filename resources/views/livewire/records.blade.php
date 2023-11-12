<div class="my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Previously Calculated Data</h1>
        <a wire:navigate href="{{route('home')}}" class="btn btn-secondary">Back</a>
    </div>
    <div class="rounded border rounded-5 border-2 p-4">
        <table class="table table-striped">
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
                    <td>{{$record->financial_health_score}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$records->links()}}
    </div>



</div>
