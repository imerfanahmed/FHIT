<div class="my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Previously Calculated Data</h1>
        <a wire:navigate href="{{route('home')}}" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
            Back
        </a>
    </div>
    <div class="rounded border rounded-5 border-2 p-4">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Business Name</th>
                <th>Income(Monthly)</th>
                <th>Expense(Monthly)</th>
                <th>Assets(Monthly)</th>
                <th>Debts(Monthly)</th>
                <th>Financial Score</th>
                <th>Comment</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{$record->id}}</td>
                    <td>{{$record->business_name}}</td>
                    <td>{{$record->income}}$</td>
                    <td>{{$record->expense}}$</td>
                    <td>{{$record->debts}}$</td>
                    <td>{{$record->assets}}$</td>
                    <td>{{number_format($record->financial_health_score,2)}}%</td>
                    <td>
                        @if($record->financial_health_score >= 80)
                            <span class="badge bg-success">Excellent</span>
                        @elseif($record->financial_health_score >= 60)
                            <span class="badge bg-primary">Good</span>
                        @elseif($record->financial_health_score >= 40)
                            <span class="badge bg-warning">Average</span>
                        @elseif($record->financial_health_score >= 20)
                            <span class="badge bg-danger">Poor</span>
                        @else
                            <span class="badge bg-dark">Very Poor</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$records->links()}}
    </div>



</div>
