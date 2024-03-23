<x-app-layout>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Books</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))

                    <div class="" style="margin: 10px"></div>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                       
                    @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bookss
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SlNo.</th>
                                            <th>Book id</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Genre</th>
                                            <th>Price</th>
                                            <th>Quantity Available</th>
                                            <th>Total Sold</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @forelse ($books as $item)
                                            <tr class="odd gradeX">
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->author }}</td>
                                                <td>{{ $item->genre }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->total_sold }}</td>
                                                <td class="center">
                                                    <a href="{{ route('show.book', $item->id) }}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td class="center">
                                                    <a href="{{ route('edit.book', $item->id) }}">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td class="center">
                                                    <form method="POST"
                                                        action="{{ route('delete.book', $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="route('delete.book')"
                                                            class="dropdown-item d-flex align-items-center" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

    </div>
</x-app-layout>
