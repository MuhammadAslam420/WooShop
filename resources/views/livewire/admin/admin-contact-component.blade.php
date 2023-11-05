<div>
 <div class="container" style="padding:30px 0;">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Contact Messages
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Message #</th>
                            <th>Sender Name</th>
                            <th>  Email</th>
                            <th>Phoone</th>
                            <th>Comment</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->comment}}</td>
                            <td>{{$contact->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                {{$contacts->links("pagination::bootstrap-4")}}
            </div>
        </div>

    </div>

</div>
</div>

</div>
