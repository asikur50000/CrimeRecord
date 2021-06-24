@extends('master')
@section('page')

    @if(session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


<center> <button type="button" onclick="printDiv()" class="btn btn-success" style="margin-bottom: 50px;margin-top: 50px">Print</button></center>

    <div id="printArea" style="background-color: skyblue " >
        <table class="table table_bordered table-hover">
            <thead>

            <th scope="col"> ID</th>
            <th scope="col">Criminal Image</th>
            <th scope="col">Criminal Name</th>
            <th scope="col">Crime</th>
            <th scope="col">Crime Area</th>
           




            </thead>
            <tbody>

            @foreach($report as $key=>$data)

                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>

                        <img style="width:50px" src="{{url('/uploads/criminal/' .$data->image)}}" alt="Image Not Found">

                    </td>

                    <td>{{$data->criminalname}}</td>
                    <td>{{$data->category->categoryname}}</td>
                    <td>{{$data->crimecity}}</td>
                   



                </tr>

            @endforeach
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
