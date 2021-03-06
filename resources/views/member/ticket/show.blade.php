@extends('layouts.app')
@section('title' , '| Eργαζόμενοι')
@section('content')
    <div><br><br></div>
    <h2 style="margin-left:70px;">Αριθμός προτερεώτητας</h2>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                    <thead>
                    <tr>
                        <th class="text-center">
                            Νούμερο
                        </th>
                        <th class="text-center">
                            Ώρα
                        </th>
                        <th class="text-center">
                            Μέσος χρόνος αναμονής
                        </th>
                        <th class="text-center">
                            Τελευταίος αριθμός
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-name="Number">
                            {{$ticket->Number}}
                        </td>
                        <td data-name="Time">
                            {{$ticket->Time}}
                        </td>
                        <td data-name="Go">
                            {{$jobAverageTime}}
                        </td>
                        <td data-name="Del">
                            {{$jobCurrentNumber}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

