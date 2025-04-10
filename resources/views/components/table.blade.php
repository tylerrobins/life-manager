@props(['headers' => null, 'rows'])

@php
   $rawRow = $rows[0] ?? [];
   $rawRowArray =
       is_object($rawRow) && method_exists($rawRow, 'getAttributes') ? $rawRow->getAttributes() : (array) $rawRow;

   $fields = $headers ? array_values($headers) : array_keys($rawRowArray);
@endphp

<table {{ $attributes(['class' => 'table-auto text-center']) }}>
   @isset($headers)
      <thead>
         <tr>
            @foreach ($headers as $label => $field)
               <th>{{ $label }}</th>
            @endforeach
         </tr>
      </thead>
   @endisset
   @isset($rows)
      <tbody>
         @foreach ($rows as $row)
            <tr class="">
               @foreach ($fields as $field)
                  <td class="p-1">
                     {{ is_array($row) ? $row[$field] : $row->$field }}
                  </td>
               @endforeach
            </tr>
         @endforeach
      </tbody>
   @endisset
</table>
