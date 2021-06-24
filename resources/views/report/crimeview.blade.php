@extends('master')
@section('page')

    @if(session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    


<center> <button type="button" onclick="printDiv()" class="btn btn-success" style="margin-bottom: 50px;margin-top: 50px">Print</button></center>
<center><h1 >Crime Report</h1></center>
    <div id="printArea" >
        <table class="table table_bordered table-hover">
            
            <tbody>

        

                <tr>
                
                    <th scope="col">Total Crime</th>
                    <td>{{$fir}}</td>
                    <tr></tr>
                    <th scope="col">Eveteasing</th>
                    <td>{{$eve}}</td>
                    <tr></tr>
                    <th scope="col">Personal Crime</th>
                    <td>{{$per}}</td>
                    <tr></tr>
                    <th scope="col">Murder</th>
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
