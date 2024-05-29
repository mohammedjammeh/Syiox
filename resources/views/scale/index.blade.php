<x-layout title="syiox home">
    <div class="table-holder">
        <table>
            <thead>
                <tr>
                    <td>name</td>
                    <td>size</td>
                    <td>status</td>
                    <td>hard id</td>
                    <td>actions</td>
                </tr>
            </thead>

            <tbody>

            @foreach ($scales as $scale)
                <tr>
                    <td>{{ $scale->name }}</td>
                    <td>{{ $scale->max_weight }}</td>
                    <td>{{ $scale->status }}</td>
                    <td>{{ $scale->external_id }}</td>
                    <td>
                        <button type="button" onclick="window.location='{{ route("scales.edit", ['scale' => $scale->id]) }}'">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>

                        <button><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <div class="t-footer">
            <button type="button" onclick="window.location='{{ route("scales.create") }}'"><i class="fa-regular fa-square-plus"></i></button>
        </div>
    </div>
</x-layout>
