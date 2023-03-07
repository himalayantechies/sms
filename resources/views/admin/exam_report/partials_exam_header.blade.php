
<tr class="result_header">
    <th rowspan="{{ $exam_header_array['max_depth'] }}"
        class="text-center"> S.N. </th>
    <th rowspan="{{ $exam_header_array['max_depth'] }}"> Subjects</th>
    <th rowspan="{{ $exam_header_array['max_depth'] }}"
        class="text-center"> Credit<br> Hours</th>
    <th colspan={{ $exam_header_array['exam_colspan_count'] }}
        class="text-center" style="font-weight:bold;">
        {{ key($exam_header_array) }} </th>
</tr>
<tr>
    @foreach ($exam_header_array[key($exam_header_array)] as $key => $top_exam)
        <th class="text-center" colspan="{{ count($top_exam) + 1 }}">
            {{ $key }}</th>
    @endforeach
</tr>
<tr>
    @foreach ($exam_header_array[key($exam_header_array)] as $key => $top_exam)
        @if (count($top_exam) > 0)
            @foreach ($top_exam as $key2 => $item)
                <td
                    {{ count($item) > 0 ? 'colspan=' . count($item) : 'rowspan=2' }}>
                    {{ $key2 }}
                </td>
            @endforeach
        @endif
    @endforeach
</tr>
<tr>
    @foreach ($exam_header_array[key($exam_header_array)] as $key => $top_exam)
        @if (count($top_exam) > 0)
            @foreach ($top_exam as $key2 => $item)
                @if (count($item) > 0)
                    @foreach ($item as $key3 => $i)
                        <td colspan="{{ count($i) }}">
                            {{ $key3 }}
                        </td>
                    @endforeach
                @endif
            @endforeach
        @endif
    @endforeach
</tr>
