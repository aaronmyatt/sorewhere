<?php

namespace Tests\Routes;
use Tests\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class RootRouteTest extends TestCase
{
    use MatchesSnapshots;
    
    public function test_root_is_green()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_root_consistency()
    {
        $html = $this->get('/')->getContent();

        $this->assertMatchesSnapshot($html);
    }
}
