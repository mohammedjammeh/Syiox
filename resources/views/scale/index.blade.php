
<x-layout title="syiox home">
    <div class="table-holder">
        <table>
            <thead>
                <tr>
                    <td>name</td>
                    <td>size</td>
                    <td>status</td>
                    <td>actions</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>oat milk</td>
                    <td>80%</td>
                    <td>full</td>
                    <td>
                        <button><i class="fa-regular fa-pen-to-square"></i></button>
                        <button><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>coca cola</td>
                    <td>5%</td>
                    <td>empty</td>
                    <td>
                        <button><i class="fa-regular fa-pen-to-square"></i></button>
                        <button><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>water</td>
                    <td>60%</td>
                    <td>medium</td>
                    <td>
                        <button><i class="fa-regular fa-pen-to-square"></i></button>
                        <button><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>cereals</td>
                    <td>40%</td>
                    <td>medium</td>
                    <td>
                        <button><i class="fa-regular fa-pen-to-square"></i></button>
                        <button><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>coffee</td>
                    <td>13%</td>
                    <td>empty</td>
                    <td>
                        <button><i class="fa-regular fa-pen-to-square"></i></button>
                        <button><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="t-footer">
            <button type="button" onclick="window.location='{{ route("scales.create") }}'"><i class="fa-regular fa-square-plus"></i></button>
        </div>
    </div>
</x-layout>
