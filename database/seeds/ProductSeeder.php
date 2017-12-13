<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert([
            'id' => 1,
            'product_category_id' => 101,
            'retail_price' => 15.0,
            'name' => 'Nama Matcha Corn Snack',
            'description' => '7-select snack',
            'ian' => '7612100053805',
            'created_at' => '2017-10-25 11:59:59',
            'updated_at' => '2017-10-25 11:59:59',
            'image' => 'https://pbs.twimg.com/media/DIUQ8ibUEAAyc5k.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'product_category_id' => 102,
            'retail_price' => 10.0,
            'name' => 'LUSH',
            'description' => 'Chocolate Chewy Candy',
            'ian' => '2212100053805',
            'created_at' => '2017-10-24 10:00:23',
            'updated_at' => '2017-10-24 10:00:23',
            'image' => 'https://secure.ap-tescoassets.com/assets/TH/035/8850309140035/ShotType1_328x328.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'product_category_id' => 106,
            'retail_price' => 10.0,
            'name' => 'Chocolate Custard Bun',
            'description' => 'farm house chocolate bun',
            'ian' => '5661100874326',
            'created_at' => '2017-10-27 8:00:11',
            'updated_at' => '2017-10-27 8:00:11',
            'image' => 'http://www.farmhouse.co.th/uploads/products/2015/4/1429513646.png'
        ]);

        DB::table('products')->insert([
            'id' => 4,
            'product_category_id' => 102,
            'retail_price' => 17.0,
            'name' => 'Mentos Incredible Chew',
            'description' => 'mentos incredible chew grape flavour',
            'ian' => '8345683312456',
            'created_at' => '2017-10-28 9:30:45',
            'updated_at' => '2017-10-28 9:30:45',
            'image' => 'https://www.waangoo.com/content/images/thumbs/0010320_mentos-incredible-chew-grape_600.jpeg'
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'product_category_id' => 104,
            'retail_price' => 15.0,
            'name' => 'Mama Cup',
            'description' => 'Instand noodle cup cheep and tasty',
            'ian' => '0145123435678',
            'created_at' => '2017-11-1 00:54:39',
            'updated_at' => '2017-11-1 00:54:39',
            'image' => 'https://www.thamai.net/wp-content/uploads/2014/09/4-mama.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 6,
            'product_category_id' => 105,
            'retail_price' => 120.0,
            'name' => 'durex',
            'description' => 'condom packege. in pack have 3 piece of condom ',
            'ian' => '1642843579524',
            'created_at' => '2017-11-1 03:22:14',
            'updated_at' => '2017-11-1 03:22:14',
            'image' => 'https://grandcondom.com/image/cache/data/durex-comfort/durex-comfort-zoom-750x750.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 7,
            'product_category_id' => 101,
            'retail_price' => 20.0,
            'name' => 'Corn Snack',
            'description' => 'Corn flavor. tasty and sweet snack',
            'ian' => '7736711373216',
            'created_at' => '2017-11-1 08:27:41',
            'updated_at' => '2017-11-1 08:27:41',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip2.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 8,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Paprika',
            'description' => 'Potato snack, yummy and cripsy',
            'ian' => '4037467729407',
            'created_at' => '2017-11-1 11:53:17',
            'updated_at' => '2017-11-1 11:53:17',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip21.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 9,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Lay’s Popcorn Caramel',
            'description' => 'In Lay’s defence… no, we’re not even going to go there this time. There’s no defending this abomination to the good name of the potato chip. Let popcorn be popcorn and chips be chips. The end. ',
            'ian' => '1281329802103',
            'created_at' => '2017-11-1 12:41:29',
            'updated_at' => '2017-11-1 12:41:29',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip15.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 10,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Lay’s Classic Shushi/Goong',
            'description' => 'You would only ever buy these because you’d never bought them before. If the terrible smell of feet and fish doesn’t put you off, then the lime-skin after-taste will. The only reward this chip gives us is bad breath.',
            'ian' => '6059501901851',
            'created_at' => '2017-11-1 12:48:37',
            'updated_at' => '2017-11-1 12:48:37',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip11.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 11,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Jaxx Mix Cheesy Sausage Pizza ',
            'description' => 'Cheese: good. Sausage: good. Jaxx Mix Cheesy Sausage Pizza flavor: very, very not good. Thanks for the keychain, but we’d rather our B25 back. ',
            'ian' => '6195088189512',
            'created_at' => '2017-11-1 12:48:37',
            'updated_at' => '2017-11-1 12:48:37',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip8.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 12,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Cornae Cheese ',
            'description' => 'We had more fun putting these onto our fingertips and doing witch impressions than we did eating them. Milky cheese? No thanks. We do at least dig the psychedelic cheese vortex packaging, and the fact that Cornae self-describes its product as “Useful Food.” Nice. ',
            'ian' => '1231911244273',
            'created_at' => '2017-11-1 14:51:26',
            'updated_at' => '2017-11-1 14:51:26',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip4.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 13,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Cheetos ',
            'description' => 'The chewy, cheese-less, mouth-cutting taste of disappointment',
            'ian' => '9272022791429',
            'created_at' => '2017-11-1 14:59:47',
            'updated_at' => '2017-11-1 14:59:47',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip3.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 14,
            'product_category_id' => 101,
            'retail_price' => 20.0,
            'name' => 'Mister Potato Original  ',
            'description' => 'You’d think that potato actually tasting like potato would be a good thing. You’d be wrong. These spongy Pringle-rip-offs taste way too much like something that was dug out of the ground for our liking. ',
            'ian' => '5407849251280',
            'created_at' => '2017-11-1 17:25:33',
            'updated_at' => '2017-11-1 17:25:33',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip20.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 15,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Testo Fit Seafood ',
            'description' => 'This is the seafood chip of a company with a warped idea of what seafood tastes like. ',
            'ian' => '2258462797937',
            'created_at' => '2017-11-1 17:51:07',
            'updated_at' => '2017-11-1 17:51:07',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_seafood.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 16,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Jaxx Original',
            'description' => 'Ever wondered what it’d be like to eat buttered polystyrene packing peanuts? Us neither. But Jaxx kindly provided the answer with this shocker of a potato snack. ',
            'ian' => '1495191733381',
            'created_at' => '2017-11-7 12:16:28',
            'updated_at' => '2017-11-7 12:16:28',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip9.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 17,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Twisties Chocolate',
            'description' => 'These are like a parent’s worst nightmare: a hybrid of salty corn chips and sugary chocolate-flavored breakfast cereal. To top it off, they’re also pumped full of chocolate spread so sickly it would make the Nutella boys shudder.',
            'ian' => '4294860024784',
            'created_at' => '2017-11-7 15:18:37',
            'updated_at' => '2017-11-7 15:18:37',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip12.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 18,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Lay’s Nori Seaweed ',
            'description' => 'Kind of like salt and vinegar chips, minus the salt. And vinegar. But we like them. ',
            'ian' => '3492055343729',
            'created_at' => '2017-11-7 16:54:27',
            'updated_at' => '2017-11-7 16:54:27',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip29.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 19,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Lay’s Rock Original ',
            'description' => 'Lay’s are Lay’s. You’d feel safe buying these in front of a new date to chill watching TV. Sure, we’d rather be eating Twisties Extreme Cheese corn puffs, too, but that’s hard to admit in front of someone you want to have sex with.',
            'ian' => '5914889551048',
            'created_at' => '2017-11-7 19:38:18',
            'updated_at' => '2017-11-7 19:38:18',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip14.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 20,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Twisties Extreme Cheese ',
            'description' => 'The crisp everyone secretly wants to be eating—a corny win with a cheesiness that lives up to its name. Like all corn chips, you get the added benefit of picking them from your teeth with your tongue for long after the pack is finished. ',
            'ian' => '0736471649788',
            'created_at' => '2017-11-10 08:26:49',
            'updated_at' => '2017-11-10 08:26:49',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip30.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 21,
            'product_category_id' => 101,
            'retail_price' => 5.0,
            'name' => 'Potae Potato Snack  ',
            'description' => 'We love these—the kind of chip you want to stuff endlessly into your mouth and then salivate into a salty, potato-based paste. Or is that just us?',
            'ian' => '4435120572773',
            'created_at' => '2017-11-10 09:46:52',
            'updated_at' => '2017-11-10 09:46:52',
            'image' => 'http://bk.asia-city.com/sites/default/files/u142691/taste_chip23.jpg'
        ]);
    }
}
