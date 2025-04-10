@props(['headers', 'rows'])

<table class="table-auto">
   @isset($headers)
      <thead>
         <tr>
            @foreach ($headers as $header)
               <th>{{ $header }}</th>
            @endforeach
         </tr>
      </thead>
   @endisset
   @isset($rows)
      <tbody>
         @foreach ($rows as $row)
            <tr>
               @foreach ($row as $item)
                  <td>{{ $item }}</td>
               @endforeach
            </tr>
         @endforeach
      </tbody>
   @endisset
</table>
