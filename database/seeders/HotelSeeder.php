<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    public function run(): void
    {
        $hotels = [
            [
                'name' => 'Copenhagen City Hotel',
                'country' => 'Denmark',
                'city' => 'Copenhagen',
                'ratting' => 4.5,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/99121658.jpg?k=de3bd1ef85f7ffd0a60515a222110d314309e913cdd27799ff707e1be3778226&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482594.jpg?k=6d242d25c1133c57f3b4625ec07acc031bf81c81d4f2e84a5a4279a03f365724&o=&hp=1',
                ]),
                'summary' => 'A luxurious hotel in the heart of Copenhagen.',
                'description' => 'Copenhagen City Hotel offers premium rooms with views of the city skyline. Ideal for both business and leisure travelers.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Aarhus Modern Inn',
                'country' => 'Denmark',
                'city' => 'Aarhus',
                'ratting' => 4.2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482592.jpg?k=bcab857279c9835fd498f8f693938b05e2026dfdf18ad7845cad21cbe494a351&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/9464865.jpg?k=90c720dbe01468953c57eaf822b4f39bd472d08b2ec63fe4e01c86a8db91a253&o=&hp=1',
                ]),
                'summary' => 'A modern inn with a welcoming atmosphere.',
                'description' => 'Located in Aarhus, this inn offers modern comforts in a classic Danish setting. Great for short stays.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Odense Heritage Hotel',
                'country' => 'Denmark',
                'city' => 'Odense',
                'ratting' => 4.7,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916647.jpg?k=f54b4fddd485ce49cc5b1428f27233d921cc8f895fc4e7ce85a6b242674b63db&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/63861209.jpg?k=733e2e6dc03386af092a50c2fd55a2d6028330b89ffff503602fe409bbb8942a&o=&hp=1',
                ]),
                'summary' => 'A historical hotel with modern amenities.',
                'description' => 'The Odense Heritage Hotel offers guests a mix of modern comfort and Danish history. Perfect for travelers who appreciate culture.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Roskilde Riverside Hotel',
                'country' => 'Denmark',
                'city' => 'Roskilde',
                'ratting' => 4.3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/63861177.jpg?k=fb054b27b0b29669326472a768419bec5e6765576acf8f904322a5810e349b89&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/63861073.jpg?k=b08542db8f947f1ca5fc07278f2e22ce866683453d7a59aa0e20fbc990b63549&o=&hp=1',
                ]),
                'summary' => 'A charming hotel along the Roskilde Fjord.',
                'description' => 'Enjoy stunning views of Roskilde Fjord while staying at this charming and cozy hotel. Ideal for a relaxing vacation.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Skagen Northern Stay',
                'country' => 'Denmark',
                'city' => 'Skagen',
                'ratting' => 4.1,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/9464898.jpg?k=9d2be96f2442e1b7c9a3ba869dc9759265e9b9eb702fdabfb6f04a316ff38707&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/63860977.jpg?k=2f39a483786ada3eaf36f8fa229aeeaec77a5d77c41fcfbea191cfd4f77a1ab3&o=&hp=1',
                ]),
                'summary' => 'A cozy stay at the top of Denmark.',
                'description' => 'Located in Skagen, this hotel provides a peaceful and serene atmosphere for those looking to escape.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Esbjerg Seaside Inn',
                'country' => 'Denmark',
                'city' => 'Esbjerg',
                'ratting' => 4.0,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/396530197.jpg?k=66a85ba1ac3929c4540f7bb6700f5bb6e9c85577423be32dd160c2e59ee99dd5&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/396530273.jpg?k=c9f45287101ad26f3901690ac0627584882e7004bd82b66d42bc3bb789ec0bc4&o=&hp=1',
                ]),
                'summary' => 'A seaside hotel with stunning ocean views.',
                'description' => 'Esbjerg Seaside Inn is perfect for beach lovers. With close access to the ocean, it offers beautiful views and a relaxing stay.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Aalborg Comfort Hotel',
                'country' => 'Denmark',
                'city' => 'Aalborg',
                'ratting' => 4.6,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/83548145.jpg?k=50ba36cfdf58b6464359a7cd21f2209ffe000cfb6ac39a0e21a5a31ebd22394e&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/78690152.jpg?k=1dbb951ada8750ea8fd439fcb494d4bfe542514987a6454eeb306639031b6201&o=&hp=1',
                ]),
                'summary' => 'A comfortable hotel with great service.',
                'description' => 'Aalborg Comfort Hotel provides excellent service and well-furnished rooms for its guests. Ideal for family vacations.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Helsingør Castle Inn',
                'country' => 'Denmark',
                'city' => 'Helsingør',
                'ratting' => 4.8,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/123716453.jpg?k=fd81974b2a037c60eb9bf24112182e7659cfd22cb52e328811446fc26f06fe7d&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/78811531.jpg?k=9d2c53217d749d7c829b4402e739f6f319ed77c1ea2d7caef03853c3cb07163c&o=&hp=1',
                ]),
                'summary' => 'Stay near Kronborg Castle.',
                'description' => 'Helsingør Castle Inn offers a historical ambiance, located near the famous Kronborg Castle. Ideal for history lovers.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Billund Family Resort',
                'country' => 'Denmark',
                'city' => 'Billund',
                'ratting' => 4.9,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/78811183.jpg?k=1edf6c23dd945a4730bc65ab31a6871482fdc7ae4ed9e498d75cf6b5c4a8eab4&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/514710499.jpg?k=1536ecabdff1dff59688a1408f495cd34b66fa259aca33504922b6b51031269c&o=&hp=1',
                ]),
                'summary' => 'A family-friendly resort near LEGOLAND.',
                'description' => 'Billund Family Resort is perfect for families visiting LEGOLAND. The resort offers activities for children and comfortable rooms for families.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Vejle Valley Hotel',
                'country' => 'Denmark',
                'city' => 'Vejle',
                'ratting' => 4.3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/514710655.jpg?k=a32cdf95f18c39c300f30ee9d31a814b1ced08ee65ed3df87f0fd397725ec35c&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/514710664.jpg?k=095459fe9ff37d4710858455ea1d3ada25f0625eecd038267d244bc1b28fe6af&o=&hp=1',
                ]),
                'summary' => 'A peaceful hotel located in the Vejle Valley.',
                'description' => 'Vejle Valley Hotel provides a quiet, nature-filled escape with beautiful landscapes surrounding the area.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Bornholm Cliffside Retreat',
                'country' => 'Denmark',
                'city' => 'Rønne',
                'ratting' => 4.7,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/594730438.jpg?k=a94e980be760b99f0ce35fd7ff05ee1a9d15cc832840dedb6cd7d573cbcd565b&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/226410890.jpg?k=2a0b39a2538a4da2713e50bb01f94bb3b21e0962a9b42874d3bc0ac8f5a77644&o=&hp=1',
                ]),
                'summary' => 'A scenic retreat on the cliffs of Bornholm.',
                'description' => 'Enjoy breathtaking views from this cliffside retreat. Perfect for travelers seeking a unique and serene getaway.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Silkeborg Lakeside Hotel',
                'country' => 'Denmark',
                'city' => 'Silkeborg',
                'ratting' => 4.4,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/226410589.jpg?k=d3099f5fa999fe400bacea10e65104f9d59d04787317572765be7811d42b3f44&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/226411247.jpg?k=9f4d7735018217485c7c6135b168cee5fc57adf79d21eb28d22cac47f702dac5&o=&hp=1',
                ]),
                'summary' => 'A lakeside hotel offering peaceful views.',
                'description' => 'Situated by the beautiful Silkeborg lakes, this hotel offers tranquil surroundings for a relaxing vacation.',
                'attributes' => json_encode([
                    'wifi',
                    'pool',
                    'gym',
                    'parking',
                ]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ];
        DB::table(table: 'hotels')->insert($hotels);
    }
}
