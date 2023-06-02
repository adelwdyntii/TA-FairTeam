<div class="card my-4">
    <div class="card-header">Payments</div>
    <div class="card-body">
        <a class="btn btn-sm btn-success" 
        href="{{ route('payments.create',['student_id'=> $student->id])}}">
        Add Payment
        </a>

        @php
            $studentPayments = $student->payments;
        @endphp
        @if (isset($studentPayments))
            @include('payments.student-payments')
        @endif
    </div>
</div>