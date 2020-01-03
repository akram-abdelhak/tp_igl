<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class absenceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    { 
        $response = $this->withHeaders([
           'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNzg1OWRkZDViM2Q5Zjc4NjYxMzQ3NjYxNGFmMTRmY2I1OGU1NTcyZjNkYTg5MTU5MGFlN2U4Yjg5NzNiNjgzNWEzNzQxYThmZDUyZDc4YmEiLCJpYXQiOjE1NzQ4NjQwMzcsIm5iZiI6MTU3NDg2NDAzNywiZXhwIjoxNjA2NDg2NDM3LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.CyeZmsbp3eK_FDtE8NSk256e0RUcYOBE_f0SjcpUxZppMjqwlx2fgcle05FdENhcVtESCseGzV87LDfsCL6lffwmPDwahmvixdwEzccqKOOJdUqXT2lNdr4hmqbgh6lGcpAZLwB_tKH6FBt5GSnp1WL3c2lQWMKdcW7ZgPpcTh4x0Mdm6C4PUgSsAtTUQ26V2GH7busE_nVn2upw5ykOUWAHnA3lADyqLzmaHao8Kqrw35OFAzcTQi-8NX66kpOBo-bozmKxZguM7MJItWWgzza0Xo2QClB2AbRD4S07SD2Vr2TNe5pUC9R4wLWRCtY1p3BjIebBIrCSD6G8ElIhkq3H_x1FJ483o-t2gXPUmi2inELPCv5pXT79uI4CpbBoNio4DubyLXze_Yn5bYrhfYxR-gccKwSyoKd3D_4Lvfau4bQoliKjkfsvOLWZ2xt_ad5h4NLm0uDna2ZzHe8EQcQC3lgpAqfEbbMdsnXTz37ECfKmkrzCXrowURoOLflOeLk58r_IU0RAB1CxVIb4-v6kB_ShcMCKeogcMBxhkL62f2zOU2hVVasymel6rkUfk8CiL214NBsBLh2QksbZ_p8SkBu3tDK8daUuZ-6n_mMdprR_K6Js6zdaIrcWjyp9ThLqcToxGztM61i7CUzVnAvavOe9Ht1D0T1IJoM8ZwM',
        ])->json('get', '/API/absences');
        $response
            ->assertOk() ; 
    }
}
