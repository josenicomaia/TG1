<?php

use App\Group;
use Illuminate\Database\Seeder;

class InitialChartOfAccountsSeeder extends Seeder {
    private $data = [
        'Obrigações Acessórias' => [
            'Salários',
            'Férias',
            '13º Terceiro',
            'Vale transporte',
            'Reembolso',
            'Alimentação',
            'Sobreaviso',
            'INSS',
            'FGTS',
            'Seguro de Vida',
            'Exames',
            'Outras despesas de RH',
        ],
        'Despesas / Custos Operacionais' => [
            'Energia',
            'Telefone',
            'Combustível',
            'Internet',
            'Manutenção Veículos',
            'IPVA',
            'Seguro veículos',
            'Sistemas',
            'Outras despesa Operacionais',
        ],
        'Despesas / Custos Administrativos' => [
            'Aluguel',
            'Condomínio',
            'IPTU',
            'Simples Nacional',
            'Consultoria Contábil',
            'Seguro Predial',
            'Taxas Bancarias',
            'Cartão de Credito',
            'Outras despesas Administrativas',
        ],
        'Obrigações Fiscais' => [
            'INSS PATRONAL',
            'IRPJ',
            'CSLL',
            'ISS',
            'ICMS',
            'PIS',
            'COFINS',
        ],
        'Distribuidores' => [
            'Dist. A',
            'Dist. B',
            'Dist. C',
        ]
    ];

    public function run() {
        $rootOrder = 1;

        foreach ($this->data as $rootDescription => $childrenDescription) {
            $rootGroup = new Group([
                'order' => $rootOrder ++,
                'description' => $rootDescription
            ]);

            $rootGroup->save();
            $childOrder = 1;

            foreach ($childrenDescription as $childDescription) {
                $childGroup = new Group([
                    'order' => $childOrder ++,
                    'description' => $childDescription,
                    'group_id' => $rootGroup->id
                ]);

                $childGroup->save();
            }
        }
    }
}
