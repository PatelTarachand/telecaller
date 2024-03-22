<style>
    #left{
        text-align:left;
    }
    #right{
        text-align:right;
    }
    img{
        /* width:50%; */
    }
    table{
        margin-top:1rem;
        width:100%;
        border-collapse:collapse;
    }
    th,td{
        /* border:1px solid black; */
    }
    td{
        text-align:center;
    }
</style>

<table>
    <tr>
        <td><div id="left">{{ date('d/m/Y') }}</div></td>
        <td>
            <div id="right">
                <img src="{{ public_path('assets/images/icon/telecaller.jpg') }}" alt="" width="100px" height="100px">
            </div>
        </td>
    </tr>
</table>




<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customer as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->city }}</td>
            <td>{{ $row->mobileNo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>