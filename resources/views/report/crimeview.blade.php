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
                
                    <th scope="col" style="color: brown">Total Crime</th>
                    <td style="color: brown">{{$fir}}</td>
                    <tr></tr>
                    <th scope="col">Eveteasing</th>
                    <td>{{$eve}}</td>
                    <tr></tr>
                    <th scope="col">Personal Crime</th>
                    <td>{{$per}}</td>
                    <tr></tr>
                    <th scope="col">Murder</th>
                    <td>{{$murder}}</td>
                    <tr></tr>
                    <th scope="col">Property Crime</th>
                    <td>{{$propertycrime}}</td>
                    <tr></tr>
                    <th scope="col">Child Abuse</th>
                    <td>{{$childabuse}}</td>
                    <tr></tr>
                    <th scope="col">Cyber Crime</th>
                    <td>{{$cybercrime}}</td>
                    <tr></tr>
                    <th scope="col">Fraud</th>
                    <td>{{$fraud}}</td>
                    <tr></tr>
                    <th scope="col">Rape</th>
                    <td>{{$rape}}</td>

                    
                   
                   
                   



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
