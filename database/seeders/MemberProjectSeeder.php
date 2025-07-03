<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Project;

class MemberProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criação de membros
        $member1 = Member::create([
            'name'     => "Gabriel Henrique",
            'foto'     => "http://localhost:8000/storage/projects/gabriel.jpeg",
            'cell'     => "(34) 9 9999-0001",
            'email'    => "gabriel@email.com",
            'category' => "Doutorado",
            'pesquisa' => "Realidade Virtual aplicada à saúde",
            'lattes'   => "http://lattes.cnpq.br/123456789",
            'linkedin' => "https://linkedin.com/in/gabrielhenrique",
            'orcid'    => "0000-0001-0000-0001",
            'link'     => "https://github.com/gabrielhenrique",
        ]);

        $member2 = Member::create([
            'name'     => "Carla Silva",
            'foto'     => "https://via.placeholder.com/150?text=Carla",
            'cell'     => "(34) 9 9999-0002",
            'email'    => "carla@email.com",
            'category' => "Mestrado",
            'pesquisa' => "Reconhecimento de padrões em sensores biométricos",
            'lattes'   => "http://lattes.cnpq.br/234567890",
            'linkedin' => "https://linkedin.com/in/carlasilva",
            'orcid'    => "0000-0002-0000-0002",
            'link'     => "https://github.com/carlasilva",
        ]);

        // Criação de projetos
        $project1 = Project::create([
            'title' => 'VR Health Monitor',
            'description' => 'Projeto de monitoramento de saúde em realidade virtual.',
            'long_description' => 'Este projeto combina sensores biométricos com experiências VR imersivas para acompanhar sinais vitais em tempo real.',
            'category' => 'HealthTech',
            'tags' => ['VR', 'Saúde', 'Wearables'],
            'image_url' => 'http://localhost:8000/storage/projects/Wallpaper_B.png',
            'demo_url' => 'https://example.com/demo1',
            'github_url' => 'https://github.com/usuario/vr-health',
            'status' => 'in-progress',
            'start_date' => '2024-10-01',
            'completion_date' => null,
            'technologies' => ['Unity', 'C#', 'Firebase'],
            'features' => ['Leitura de batimentos', 'Ambiente VR interativo'],
            'challenges' => ['Sincronização em tempo real', 'Latência de sensores'],
            'outcomes' => ['Validação com usuários reais', 'Publicação em conferência'],
        ]);

        $project2 = Project::create([
            'title' => 'AR Guide for Museums',
            'description' => 'Aplicativo de realidade aumentada para tours em museus.',
            'long_description' => 'Permite aos visitantes acessar informações sobre exposições com realidade aumentada.',
            'category' => 'Educação',
            'tags' => ['AR', 'Museu', 'Guia Interativo'],
            'image_url' => 'https://via.placeholder.com/400x300.png?text=AR+Museum',
            'demo_url' => null,
            'github_url' => 'https://github.com/usuario/ar-guide',
            'status' => 'completed',
            'start_date' => '2023-05-15',
            'completion_date' => '2023-12-20',
            'technologies' => ['React Native', 'ARCore', 'Laravel'],
            'features' => ['Reconhecimento de imagem', 'Narrativas interativas'],
            'challenges' => ['Reconhecimento offline', 'Usabilidade em diferentes luzes'],
            'outcomes' => ['Projeto premiado', 'Parceria com museu local'],
        ]);

        // Relacionamentos many-to-many
        $member1->projects()->attach([$project1->id, $project2->id]);
        $member2->projects()->attach([$project2->id]);
    }
}
