<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use App\Models\Organization;
use App\Models\Program;
use App\Models\Staff;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'role' => env('ADMIN_ROLE'),
            'phone' => env('ADMIN_PHONE'),
        ]);

        for ($i = 0; $i <= 10; $i++) {
            User::create([
                'name' => "user{$i}",
                'email' => "user{$i}@example.com",
                'password' => bcrypt('password'),
                'role' => 'user',
                'phone' => sprintf('08123456%02d', $i),
            ]);
        }

        Organization::create([
            "name" => "Sibernetika",
            "logo" => "logo",
            "about" => "Kami adalah organisasi yang berdedikasi untuk menyediakan layanan terbaik bagi komunitas kami. Visi kami adalah menciptakan dunia yang lebih baik melalui inovasi dan kolaborasi. Misi kami meliputi pemberdayaan individu, pengembangan berkelanjutan, dan kontribusi positif terhadap masyarakat.",
            "vision" => "Menciptakan dunia yang lebih baik melalui inovasi dan kolaborasi.",
            "mission" => "Pemberdayaan individu, pengembangan berkelanjutan, dan kontribusi positif terhadap masyarakat.",
            "status" => "active",
        ]);

        for ($i = 0; $i < 6; $i++) {
            Department::create([
                'logo' => "department_logo_{$i}.png",
                'name' => "Departemen {$i}",
                'about' => "About untuk Departemen {$i}. Departemen ini bertanggung jawab atas berbagai inisiatif dan program yang mendukung tujuan organisasi secara keseluruhan.",
                'vision' => "Visi untuk Departemen {$i} adalah menjadi pemimpin dalam bidangnya dan memberikan kontribusi signifikan terhadap kesuksesan organisasi.",
                'mision' => "Misi Departemen {$i} meliputi pengembangan program inovatif, kolaborasi lintas tim, dan peningkatan berkelanjutan dalam semua aspek operasional.",
                'organization_id' => 1,
            ]);
        }

        $departmentIds = Department::pluck('id')->toArray();

        for ($i = 0; $i <= 30; $i++) {
            Staff::create([
                'photo' => "staff_photo_{$i}.png",
                'name' => "Staff {$i}",
                'position' => "Position {$i}",
                'department_id' => $departmentIds[array_rand($departmentIds)],
            ]);

            Program::create([
                'name' => "Program {$i}",
                'photo' => "program_photo_{$i}.png",
                'background' => "Background untuk Program {$i}. Program ini dirancang untuk memberikan dampak positif kepada komunitas melalui berbagai kegiatan dan inisiatif.",
                'activity' => "Aktivitas utama dari Program {$i} meliputi pelatihan, workshop, dan kampanye kesadaran yang bertujuan untuk memberdayakan peserta dan meningkatkan keterlibatan mereka.",
                'description' => "Deskripsi lengkap tentang Program {$i}. Program ini menawarkan berbagai manfaat dan peluang bagi peserta untuk berkembang secara pribadi dan profesional.",
                'location' => "Location for Program {$i}",
                'date' => now()->addDays($i),
                'department_id' => $departmentIds[array_rand($departmentIds)],
            ]);
        }

        $programIds = Program::pluck('id')->toArray();

        for ($i = 0; $i < 40; $i++) {
            Course::create([
                'name' => "Course {$i}",
                'photo' => "course_photo_{$i}.png",
                'description' => "Description for Course {$i}",
                'video' => "video_course_{$i}.mp4",
                'content' => "Content for Course {$i}",
                'file' => "file_course_{$i}.pdf",
                'program_id' => $programIds[array_rand($programIds)],
            ]);
        }

        $userIds = User::pluck('id')->toArray();
        $courseIds = Course::pluck('id')->toArray();
        for ($i = 0; $i < 100; $i++) {
            // Create a user-course relationship
            Task::create([
                'user_id' => $userIds[array_rand($userIds)],
                'course_id' => $courseIds[array_rand($courseIds)],
                'submission' => "Submission for Task {$i}",
            ]);
        }
    }
}
