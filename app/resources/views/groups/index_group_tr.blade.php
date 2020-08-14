<tr>
    <th scope="row">{{$parentOrder ?? ''}}{{$group->order}}</th>
    <td>{{$group->description}}</td>
    <td class="text-center">
        <form action="/groups/{{$group->id}}" method="post">
            @csrf
            @method('delete')
            <a href="/groups/create?group_id={{$group->id}}" class="btn btn-sm btn-link" role="button">
                <img src="/icons/plus-circle.svg" alt="Adicionar Subcategoria" />
            </a>
            <a href="/groups/{{$group->id}}/edit" class="btn btn-sm btn-link" role="button">
                <img src="/icons/pencil.svg" alt="Editar" />
            </a>
            <button type="submit" class="btn btn-sm btn-link" role="link" onclick="return confirm('Tem certeza que deseja apagar \'{{$group->description}}\'')">
                <img src="/icons/x-circle.svg" alt="Apagar" />
            </button>
        </form>
    </td>
</tr>
@if (count($group->groups))
    @foreach($group->groups as $groupChild)
        @isset($parentOrder)
            @include('groups.index_group_tr', [
                  'parentOrder' => "{$parentOrder}{$group->order}.",
                  'group' => $groupChild
              ])
        @else
            @include('groups.index_group_tr', [
                'parentOrder' => "{$group->order}.",
                'group' => $groupChild
            ])
        @endisset
    @endforeach
@endif
