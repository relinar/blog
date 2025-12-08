<?php

use App\Models\Post;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\post;

it('allows authenticated users to add a comment', function () {
    $user = User::factory()->create();
    $post = Post::factory()->for(User::factory())->create();

    $response = actingAs($user)->post(route('comments.store', $post), [
        'body' => 'This is a test comment.',
    ]);

    $response->assertRedirect(route('post', $post));

    $this->assertDatabaseHas('comments', [
        'body' => 'This is a test comment.',
        'user_id' => $user->id,
        'post_id' => $post->id,
    ]);
});

it('rejects empty comments', function () {
    $user = User::factory()->create();
    $post = Post::factory()->for(User::factory())->create();

    $response = actingAs($user)->post(route('comments.store', $post), [
        'body' => '',
    ]);

    $response->assertSessionHasErrors(['body']);
    $this->assertDatabaseCount('comments', 0);
});

it('redirects guests to login when commenting', function () {
    $post = Post::factory()->for(User::factory())->create();

    $response = post(route('comments.store', $post), [
        'body' => 'Guest comment attempt.',
    ]);

    $response->assertRedirect(route('login'));
    $this->assertDatabaseCount('comments', 0);
});

