<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return volid
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    User::create([
        'name' => 'Nasywa Hanifa',
        'username' => 'nasywahanifa',
        'email' => 'nasywahanifa128@gmail.com',
        'password' => bcrypt('password')
    ]);

    //User::create([
    //    'name' => 'Rika Aulia',
    //    'email' => 'rikarahma151@gmail.com',
    //    'password' => bcrypt('12345')
    //]);

    \App\Models\User::factory(3)->create();

    Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'
    ]);

    Category::create([
        'name' => 'Web Design',
        'slug' => 'web-design'
    ]);

    Category::create([
        'name' => 'Personal',
        'slug' => 'Personal'
    ]);

    $Posts = Post::factory(20)->create();

    //Post::create([
    //    'title' => 'Judul Pertama',
    //    'slug' => 'judul-pertama',
    //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa.',
    //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa, nisi praesentium omnis hic ipsum pariatur earum itaque similique, soluta vitae quisquam quaerat natus eos? Quos tempora saepe laborum facilis voluptas quaerat quae quasi, aperiam quibusdam facere iure aliquid ducimus minus eos repellendus rerum consectetur laboriosam rem itaque. Eaque molestias harum voluptatibus, laborum adipisci dolores suscipit modi animi totam exercitationem mollitia officia cupiditate velit error ad corporis, enim atque.',
    //    'category_id' => 1,
    //    'user_id' => 1
    //    ]);

    //Post::create([
    //    'title' => 'Judul Ke Dua',
    //    'slug' => 'judul-ke-dua',
    //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa.',
    //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa, nisi praesentium omnis hic ipsum pariatur earum itaque similique, soluta vitae quisquam quaerat natus eos? Quos tempora saepe laborum facilis voluptas quaerat quae quasi, aperiam quibusdam facere iure aliquid ducimus minus eos repellendus rerum consectetur laboriosam rem itaque. Eaque molestias harum voluptatibus, laborum adipisci dolores suscipit modi animi totam exercitationem mollitia officia cupiditate velit error ad corporis, enim atque.',
    //    'category_id' => 1,
    //    'user_id' => 1
    //    ]);
    
    //Post::create([
    //    'title' => 'Judul Ke Tiga',
    //    'slug' => 'judul-ke-tiga',
    //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa.',
    //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa, nisi praesentium omnis hic ipsum pariatur earum itaque similique, soluta vitae quisquam quaerat natus eos? Quos tempora saepe laborum facilis voluptas quaerat quae quasi, aperiam quibusdam facere iure aliquid ducimus minus eos repellendus rerum consectetur laboriosam rem itaque. Eaque molestias harum voluptatibus, laborum adipisci dolores suscipit modi animi totam exercitationem mollitia officia cupiditate velit error ad corporis, enim atque.',
    //    'category_id' => 2,
    //    'user_id' => 1
    //    ]);

    //Post::create([
    //    'title' => 'Judul Ke Empat',
    //    'slug' => 'judul-ke-empat',
    //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa.',
    //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque libero, non, veritatis numquam fugiat hic tempore sed est perspiciatis consequatur in cumque enim quo inventore ad eum tenetur porro id similique ex! Debitis sit ducimus odio voluptatem voluptatum totam ipsa, nisi praesentium omnis hic ipsum pariatur earum itaque similique, soluta vitae quisquam quaerat natus eos? Quos tempora saepe laborum facilis voluptas quaerat quae quasi, aperiam quibusdam facere iure aliquid ducimus minus eos repellendus rerum consectetur laboriosam rem itaque. Eaque molestias harum voluptatibus, laborum adipisci dolores suscipit modi animi totam exercitationem mollitia officia cupiditate velit error ad corporis, enim atque.',
    //    'category_id' => 2,
    //    'user_id' => 2
    //    ]);

    }
}
