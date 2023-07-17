@extends("layouts.index")
@section("title","tasks")
@section("content")
<div class="taskContainer w-full min-vh-100 d-flex justify-content-center align-items-center">

    <div class="dataTable border border-2 rounded border-dark w-75" style="height: 40rem">
        <button><a href="/task/report/{{$aDate}}/{{$edate}}" target="_blank" rel="noopener noreferrer"> Generate Pdf</a></button>
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Task No</th>
                    <th scope="col" class="text-center">Task Information</th>
                    <th scope="col" class="text-center">Assigned Date</th>
                    <th scope="col" class="text-center">End Date</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($result as $data)
                <tr>
                    <th scope="row" class="text-center">{{$data["taskID"]}}</th>
                    <td class="text-center">{{$data["taskInfo"]}}</td>
                    <td class="text-center">{{date('Y-m-d', strtotime($data["assignedDate"]))}}</td>
                    <td class="text-center">{{date('Y-m-d', strtotime($data["endDate"]))}}</td>
                    <td class="text-center">@if ($data["taskStatus"]==0)
                        <span class="badge text-bg-secondary">Not Completed</span>
                        @elseif($data["taskStatus"]==1)
                        <span class="badge text-bg-success">Completed</span>
                        @else
                        <span class="badge text-bg-info">In progress</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href={{ 'update/' . $data['taskID'] }}>
                            <button class="btn btn-primary">
                                Update
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



