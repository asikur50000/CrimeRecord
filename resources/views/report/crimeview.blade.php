@extends('master')
@section('page')

    @if(session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


<center> <button type="button" onclick="printDiv()" class="btn btn-success" style="margin-bottom: 50px;margin-top: 50px">Print</button></center>

    <div id="printArea" style="background-color: skyblue" >
        <table class="table table_bordered table-hover">
            <thead>

          
            <th scope="col">Total Crime</th>
            <th scope="col">Eveteasing</th>
            <th scope="col">Personal Crime</th>
            <th scope="col">Murder</th>
           




            </thead>
            <tbody>

        

                <tr>
                

        

                    <td>{{$fir}}</td>
                    <td>{{$eve}}</td>
                    <td>{{$per}}</td>
                    <td>{{$murder}}</td>
                   



                </tr>

          
            </tbody>
        </table>

    </div>


    <script type="text/javascript">
        function printDiv(){
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

    <br>

@endsection
