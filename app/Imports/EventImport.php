<?php

namespace App\Imports;

use App\Event;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EventImport implements ToModel, WithHeadingRow
{

    public function model(array $row): Event
    {

            $event_date = Carbon::create('2021','9','7')->format('Y-m-d');


            return new Event([
                 "name" =>  $row['name'],
                  "email" => $row['email'],
//                  "country" => $row['country'],
//                  "specialty" => $row['specialty'],
//                  "date" => $event_date,
//                  "category" => 4,
             ]);


    }

    public function headingRow(): int
    {
        return 1;
    }
}
