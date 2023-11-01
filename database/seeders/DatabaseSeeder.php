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
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            // User::create([
                //     'name' => 'Deni Pajri',
                //     'email' => 'radenii2002@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);
        
        // User::create([
        //         'name' => 'Agie Rivaldy',
        //         'email' => 'agie@gmail.com',
        //         'password' => bcrypt('54321')
        //     ]);
        User::factory(3)->create();
            
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
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A fugit quasi quo!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nesciunt ipsa debitis voluptate sint quos magnam id itaque, qui at repellat laudantium fuga, molestiae doloremque aut sed tenetur culpa saepe harum laborum voluptas. </p><p>Ut ipsam maxime dolorem, veniam a fugit? Voluptatibus impedit praesentium aperiam distinctio, magni ea corrupti harum sit doloremque laborum? Atque incidunt necessitatibus laboriosam distinctio expedita! Dolores eum ad, nesciunt maiores sint ipsa incidunt eligendi saepe blanditiis odio similique repellendus velit atque quibusdam optio perspiciatis ratione, distinctio impedit eveniet voluptatibus nostrum voluptates! </p><p>Impedit vero, dolores ipsa fugit vitae explicabo voluptas rem mollitia ea? Fuga dolores eos consequatur dolorum cumque beatae nemo aspernatur adipisci blanditiis tenetur, commodi, expedita consequuntur in dolore, perferendis sint laudantium! Earum consequatur rerum maxime ea adipisci ex similique laborum soluta non dolore! Accusantium, laboriosam accusamus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, labore.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eligendi, iste totam optio qui ratione? Numquam temporibus, perspiciatis quidem laborum non quam harum enim voluptate necessitatibus libero! </p><p>Temporibus unde incidunt commodi accusamus quae modi ipsum dolorem saepe consequuntur rem recusandae eius ex, aperiam adipisci mollitia voluptates dolorum nisi similique suscipit dolor porro voluptatum explicabo totam debitis. Quibusdam possimus debitis dolores unde hic eius veritatis nihil voluptas similique amet sed eaque cupiditate distinctio praesentium quasi, adipisci in autem! </p><p>Inventore aut ratione nam dolorum iure ipsa quo aspernatur nostrum dolores, quas quod natus molestiae eius perferendis porro! Ab voluptas cumque nobis vel error sunt? Eligendi, aliquid. Maxime quibusdam quod voluptas a neque explicabo? Labore ipsum, corporis quae, fugit dignissimos ullam nostrum incidunt culpa distinctio cum quia ducimus magni sequi adipisci id et velit accusamus? Et iste exercitationem aliquid tempore magnam velit, est facere molestias quidem architecto at id incidunt quas illum quod ipsum unde! Quasi ducimus, dolorem voluptate dolore accusamus distinctio qui.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, dolorum? Ex.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi culpa qui dicta ex aut error illum ipsum rem. Maiores ut eaque obcaecati voluptas hic maxime magnam, laborum quo aliquid aperiam vero ipsam corporis! </p><p>Esse nemo ipsa incidunt aperiam iure quas adipisci fugit? Ipsam unde, nisi dolores in officia ullam nobis officiis suscipit ratione vero voluptatum odio dicta veniam, nostrum dolorem accusantium, facere maxime aperiam fugiat? </p><p>Ad aliquam placeat consectetur deserunt labore dolor a ipsa praesentium dolorum reiciendis aliquid eligendi deleniti quos facere esse, numquam ipsam quibusdam inventore similique illo quia rerum tempore. Esse, unde natus. Sunt error ullam excepturi, earum aperiam vel. Aut excepturi neque pariatur deserunt, eius ratione voluptatum exercitationem autem ducimus natus eos repudiandae a vel sit repellendus est ipsam obcaecati consequuntur esse quis eaque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque fugiat atque, minima possimus nulla eveniet!',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quod officia natus excepturi exercitationem corporis ullam cumque! Ipsam accusamus mollitia non aliquam nemo voluptates quia exercitationem, quo ea error et, animi libero, maxime totam. </p><p>Ad fugit iusto expedita cupiditate eaque excepturi quae rem, illo eveniet consequuntur odit nesciunt quidem. Itaque animi assumenda ut odit eius, nobis saepe facere corporis non nostrum molestias! Repudiandae impedit quo, suscipit ullam culpa cumque ipsa, molestiae officiis iusto dicta iure maxime numquam aliquid aliquam dolorem! Officiis doloremque molestiae et sit alias atque corporis similique, neque maxime ipsam vitae omnis quisquam, deleniti asperiores inventore. </p><p>Ratione voluptatem quam excepturi asperiores. Debitis architecto illo vitae quae sequi, magni, sed sapiente voluptas cumque assumenda molestiae a praesentium dolor laudantium veritatis cupiditate ipsa necessitatibus, sit maiores illum ea fugiat sunt. Repudiandae, tempora obcaecati et voluptate, saepe sapiente possimus amet rem fuga eos aspernatur beatae enim ipsam nesciunt sunt maxime vel molestiae repellat delectus porro sit aliquam doloremque. Sint aspernatur architecto accusamus minus soluta odit dolore ab laudantium nam nulla a eligendi provident sit veniam incidunt recusandae, mollitia ipsum porro beatae! Asperiores debitis ab nesciunt iusto harum voluptates iste animi suscipit!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
