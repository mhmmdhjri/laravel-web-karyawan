@include('partials.navbar')

<div class="p-5">
    <button class="btn  btn-success"><a href="/add">Add</a></button>
</div>

<div class="overflow-x-auto mt-4">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>jabatan</th>
                <th>gaji</th>
                <th>Button</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($student as $key => $item)
            <tr class="hover">
                <th>{{ $key + 1 }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>{{ $item->gaji }}</td>
                <td>
                    <div class="flex">
                    <a href="/{{ $item->id }}/edit"><button class="btn btn-info">Edit</button></a>
                    <form action="/update/{{ $item->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </div>
            </tr>
            @endforeach
            
          
        </tbody>
    </table>
</div>

<!-- Akhir dari bagian konten -->
