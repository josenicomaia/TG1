<?php

use App\Entry;
use App\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class InitialCheckBalanceSheetSeeder extends Seeder {
    private $data = [
        'Obrigações Acessórias' => [
            'Salários' => [
                '2019-01-01' => 35000,
                '2019-02-01' => 35000,
                '2019-03-01' => 35000,
                '2019-04-01' => 35000,
                '2019-05-01' => 35000,
                '2019-06-01' => 35000,
                '2019-07-01' => 35000,
                '2019-08-01' => 35000,
                '2019-09-01' => 35000,
                '2019-10-01' => 35000,
                '2019-11-01' => 35000,
                '2019-12-01' => 35000,
            ],
            'Férias' => [
                '2019-01-01' => 3200,
                '2019-02-01' => 3200,
                '2019-03-01' => 3200,
                '2019-04-01' => 3200,
                '2019-05-01' => 3200,
                '2019-06-01' => 3200,
                '2019-07-01' => 3200,
                '2019-08-01' => 3200,
                '2019-09-01' => 3200,
                '2019-10-01' => 3200,
                '2019-11-01' => 3200,
                '2019-12-01' => 3200,
            ],
            '13º Terceiro' => [
                '2019-01-01' => 2916.67,
                '2019-02-01' => 2916.67,
                '2019-03-01' => 2916.67,
                '2019-04-01' => 2916.67,
                '2019-05-01' => 2916.67,
                '2019-06-01' => 2916.67,
                '2019-07-01' => 2916.67,
                '2019-08-01' => 2916.67,
                '2019-09-01' => 2916.67,
                '2019-10-01' => 2916.67,
                '2019-11-01' => 2916.67,
                '2019-12-01' => 2916.67,
            ],
            'Vale transporte' => [
                '2019-01-01' => 1200,
                '2019-02-01' => 1200,
                '2019-03-01' => 1200,
                '2019-04-01' => 1200,
                '2019-05-01' => 1200,
                '2019-06-01' => 1200,
                '2019-07-01' => 1200,
                '2019-08-01' => 1200,
                '2019-09-01' => 1200,
                '2019-10-01' => 1200,
                '2019-11-01' => 1200,
                '2019-12-01' => 1200,
            ],
            'Reembolso' => [
                '2019-01-01' => 3000,
                '2019-02-01' => 3000,
                '2019-03-01' => 3000,
                '2019-04-01' => 3000,
                '2019-05-01' => 3000,
                '2019-06-01' => 3000,
                '2019-07-01' => 3000,
                '2019-08-01' => 3000,
                '2019-09-01' => 3000,
                '2019-10-01' => 3000,
                '2019-11-01' => 3000,
                '2019-12-01' => 3000,
            ],
            'Alimentação' => [
                '2019-01-01' => 8000,
                '2019-02-01' => 8000,
                '2019-03-01' => 8000,
                '2019-04-01' => 8000,
                '2019-05-01' => 8000,
                '2019-06-01' => 8000,
                '2019-07-01' => 8000,
                '2019-08-01' => 8000,
                '2019-09-01' => 8000,
                '2019-10-01' => 8000,
                '2019-11-01' => 8000,
                '2019-12-01' => 8000,
            ],
            'Sobreaviso' => [
                '2019-01-01' => 4000,
                '2019-02-01' => 4000,
                '2019-03-01' => 4000,
                '2019-04-01' => 4000,
                '2019-05-01' => 4000,
                '2019-06-01' => 4000,
                '2019-07-01' => 4000,
                '2019-08-01' => 4000,
                '2019-09-01' => 4000,
                '2019-10-01' => 4000,
                '2019-11-01' => 4000,
                '2019-12-01' => 4000,
            ],
            'INSS' => [
                '2019-01-01' => 4550,
                '2019-02-01' => 4550,
                '2019-03-01' => 4550,
                '2019-04-01' => 4550,
                '2019-05-01' => 4550,
                '2019-06-01' => 4550,
                '2019-07-01' => 4550,
                '2019-08-01' => 4550,
                '2019-09-01' => 4550,
                '2019-10-01' => 4550,
                '2019-11-01' => 4550,
                '2019-12-01' => 4550,
            ],
            'FGTS' => [
                '2019-01-01' => 4300,
                '2019-02-01' => 4300,
                '2019-03-01' => 4300,
                '2019-04-01' => 4300,
                '2019-05-01' => 4300,
                '2019-06-01' => 4300,
                '2019-07-01' => 4300,
                '2019-08-01' => 4300,
                '2019-09-01' => 4300,
                '2019-10-01' => 4300,
                '2019-11-01' => 4300,
                '2019-12-01' => 4300,
            ],
            'Seguro de Vida' => [
                '2019-01-01' => 200,
                '2019-02-01' => 200,
                '2019-03-01' => 200,
                '2019-04-01' => 200,
                '2019-05-01' => 200,
                '2019-06-01' => 200,
                '2019-07-01' => 200,
                '2019-08-01' => 200,
                '2019-09-01' => 200,
                '2019-10-01' => 200,
                '2019-11-01' => 200,
                '2019-12-01' => 200,
            ],
            'Exames' => [
                '2019-01-01' => 1220,
                '2019-02-01' => 1220,
                '2019-03-01' => 1220,
                '2019-04-01' => 1220,
                '2019-05-01' => 1220,
                '2019-06-01' => 1220,
                '2019-07-01' => 1220,
                '2019-08-01' => 1220,
                '2019-09-01' => 1220,
                '2019-10-01' => 1220,
                '2019-11-01' => 1220,
                '2019-12-01' => 1220,
            ],
            'Outras despesas de RH' => [
                '2019-01-01' => 1550,
                '2019-02-01' => 1550,
                '2019-03-01' => 1550,
                '2019-04-01' => 1550,
                '2019-05-01' => 1550,
                '2019-06-01' => 1550,
                '2019-07-01' => 1550,
                '2019-08-01' => 1550,
                '2019-09-01' => 1550,
                '2019-10-01' => 1550,
                '2019-11-01' => 1550,
                '2019-12-01' => 1550,
            ],
        ],
        'Despesas / Custos Operacionais' => [
            'Energia' => [
                '2019-01-01' => 15000,
                '2019-02-01' => 12555,
                '2019-03-01' => 11555,
                '2019-04-01' => 10555,
                '2019-05-01' => 10000,
                '2019-06-01' => 9100,
                '2019-07-01' => 12000,
                '2019-08-01' => 11000,
                '2019-09-01' => 15000,
                '2019-10-01' => 15000,
                '2019-11-01' => 15000,
                '2019-12-01' => 15000,
            ],
            'Telefone' => [
                '2019-01-01' => 1200,
                '2019-02-01' => 1200,
                '2019-03-01' => 1200,
                '2019-04-01' => 1200,
                '2019-05-01' => 1200,
                '2019-06-01' => 1200,
                '2019-07-01' => 1200,
                '2019-08-01' => 1200,
                '2019-09-01' => 1200,
                '2019-10-01' => 1200,
                '2019-11-01' => 1200,
                '2019-12-01' => 1200,
            ],
            'Combustível' => [
                '2019-01-01' => 4000,
                '2019-02-01' => 4000,
                '2019-03-01' => 4000,
                '2019-04-01' => 4000,
                '2019-05-01' => 4000,
                '2019-06-01' => 4000,
                '2019-07-01' => 4000,
                '2019-08-01' => 4000,
                '2019-09-01' => 4000,
                '2019-10-01' => 4000,
                '2019-11-01' => 4000,
                '2019-12-01' => 4000,
            ],
            'Internet' => [
                '2019-01-01' => 400,
                '2019-02-01' => 400,
                '2019-03-01' => 400,
                '2019-04-01' => 400,
                '2019-05-01' => 400,
                '2019-06-01' => 400,
                '2019-07-01' => 400,
                '2019-08-01' => 400,
                '2019-09-01' => 400,
                '2019-10-01' => 400,
                '2019-11-01' => 400,
                '2019-12-01' => 400,
            ],
            'Manutenção Veículos' => [
                '2019-01-01' => 500,
                '2019-02-01' => 500,
                '2019-03-01' => 500,
                '2019-04-01' => 500,
                '2019-05-01' => 500,
                '2019-06-01' => 500,
                '2019-07-01' => 500,
                '2019-08-01' => 500,
                '2019-09-01' => 500,
                '2019-10-01' => 500,
                '2019-11-01' => 500,
                '2019-12-01' => 500,
            ],
            'IPVA' => [
                '2019-01-01' => 1200,
                '2019-02-01' => 1200,
                '2019-03-01' => 1200,
                '2019-04-01' => 1200,
                '2019-05-01' => 1200,
                '2019-06-01' => 1200,
                '2019-07-01' => 1200,
                '2019-08-01' => 1200,
                '2019-09-01' => 1200,
                '2019-10-01' => 1200,
                '2019-11-01' => 1200,
                '2019-12-01' => 1200,
            ],
            'Seguro veículos' => [
                '2019-01-01' => 400,
                '2019-02-01' => 400,
                '2019-03-01' => 400,
                '2019-04-01' => 400,
                '2019-05-01' => 400,
                '2019-06-01' => 400,
                '2019-07-01' => 400,
                '2019-08-01' => 400,
                '2019-09-01' => 400,
                '2019-10-01' => 400,
                '2019-11-01' => 400,
                '2019-12-01' => 400,
            ],
            'Sistemas' => [
                '2019-01-01' => 1220,
                '2019-02-01' => 1220,
                '2019-03-01' => 1220,
                '2019-04-01' => 1220,
                '2019-05-01' => 1220,
                '2019-06-01' => 1220,
                '2019-07-01' => 1220,
                '2019-08-01' => 1220,
                '2019-09-01' => 1220,
                '2019-10-01' => 1220,
                '2019-11-01' => 1220,
                '2019-12-01' => 1220,
            ],
            'Outras despesa Operacionais' => [],
        ],
        'Despesas / Custos Administrativos' => [
            'Aluguel' => [
                '2019-01-01' => 5000,
                '2019-02-01' => 5000,
                '2019-03-01' => 5000,
                '2019-04-01' => 5000,
                '2019-05-01' => 5000,
                '2019-06-01' => 5000,
                '2019-07-01' => 5000,
                '2019-08-01' => 5000,
                '2019-09-01' => 5000,
                '2019-10-01' => 5000,
                '2019-11-01' => 5000,
                '2019-12-01' => 5000,
            ],
            'Condomínio' => [
                '2019-01-01' => 500,
                '2019-02-01' => 500,
                '2019-03-01' => 500,
                '2019-04-01' => 500,
                '2019-05-01' => 500,
                '2019-06-01' => 500,
                '2019-07-01' => 500,
                '2019-08-01' => 500,
                '2019-09-01' => 500,
                '2019-10-01' => 500,
                '2019-11-01' => 500,
                '2019-12-01' => 500,
            ],
            'IPTU' => [
                '2019-01-01' => 300,
                '2019-02-01' => 300,
                '2019-03-01' => 300,
                '2019-04-01' => 300,
                '2019-05-01' => 300,
                '2019-06-01' => 300,
                '2019-07-01' => 300,
                '2019-08-01' => 300,
                '2019-09-01' => 300,
                '2019-10-01' => 300,
                '2019-11-01' => 300,
                '2019-12-01' => 300,
            ],
            'Simples Nacional' => [],
            'Consultoria Contábil' => [
                '2019-01-01' => 800,
                '2019-02-01' => 800,
                '2019-03-01' => 800,
                '2019-04-01' => 800,
                '2019-05-01' => 800,
                '2019-06-01' => 800,
                '2019-07-01' => 800,
                '2019-08-01' => 800,
                '2019-09-01' => 800,
                '2019-10-01' => 800,
                '2019-11-01' => 800,
                '2019-12-01' => 800,
            ],
            'Seguro Predial' => [
                '2019-01-01' => 120,
                '2019-02-01' => 120,
                '2019-03-01' => 120,
                '2019-04-01' => 120,
                '2019-05-01' => 120,
                '2019-06-01' => 120,
                '2019-07-01' => 120,
                '2019-08-01' => 120,
                '2019-09-01' => 120,
                '2019-10-01' => 120,
                '2019-11-01' => 120,
                '2019-12-01' => 120,
            ],
            'Taxas Bancarias' => [
                '2019-01-01' => 400,
                '2019-02-01' => 400,
                '2019-03-01' => 600,
                '2019-04-01' => 800,
                '2019-05-01' => 900,
                '2019-06-01' => 600,
                '2019-07-01' => 1000,
                '2019-08-01' => 1100,
                '2019-09-01' => 1300,
                '2019-10-01' => 1600,
                '2019-11-01' => 1100,
                '2019-12-01' => 1800,
            ],
            'Cartão de Credito' => [
                '2019-01-01' => 2440,
                '2019-02-01' => 2440,
                '2019-03-01' => 2440,
                '2019-04-01' => 2440,
                '2019-05-01' => 2440,
                '2019-06-01' => 2440,
                '2019-07-01' => 2440,
                '2019-08-01' => 2440,
                '2019-09-01' => 2440,
                '2019-10-01' => 2440,
                '2019-11-01' => 2440,
                '2019-12-01' => 2440,
            ],
            'Outras despesas Administrativas' => [],
        ],
        'Obrigações Fiscais' => [
            'INSS PATRONAL' => [
                '2019-01-01' => 7000,
                '2019-02-01' => 7000,
                '2019-03-01' => 7000,
                '2019-04-01' => 7000,
                '2019-05-01' => 7000,
                '2019-06-01' => 7000,
                '2019-07-01' => 7000,
                '2019-08-01' => 7000,
                '2019-09-01' => 7000,
                '2019-10-01' => 7000,
                '2019-11-01' => 7000,
                '2019-12-01' => 7000,
            ],
            'IRPJ' => [
                '2019-01-01' => 3559,
                '2019-02-01' => 3559,
                '2019-03-01' => 3559,
                '2019-04-01' => 3559,
                '2019-05-01' => 3559,
                '2019-06-01' => 3559,
                '2019-07-01' => 3559,
                '2019-08-01' => 3559,
                '2019-09-01' => 3559,
                '2019-10-01' => 3559,
                '2019-11-01' => 3559,
                '2019-12-01' => 3559,
            ],
            'CSLL' => [
                '2019-01-01' => 1229,
                '2019-02-01' => 1229,
                '2019-03-01' => 1229,
                '2019-04-01' => 1229,
                '2019-05-01' => 1229,
                '2019-06-01' => 1229,
                '2019-07-01' => 1229,
                '2019-08-01' => 1229,
                '2019-09-01' => 1229,
                '2019-10-01' => 1229,
                '2019-11-01' => 1229,
                '2019-12-01' => 1229,
            ],
            'ISS' => [
                '2019-01-01' => 2555,
                '2019-02-01' => 2555,
                '2019-03-01' => 2555,
                '2019-04-01' => 2555,
                '2019-05-01' => 2555,
                '2019-06-01' => 2555,
                '2019-07-01' => 2555,
                '2019-08-01' => 2555,
                '2019-09-01' => 2555,
                '2019-10-01' => 2555,
                '2019-11-01' => 2555,
                '2019-12-01' => 2555,
            ],
            'ICMS' => [
                '2019-01-01' => 6000,
                '2019-02-01' => 6000,
                '2019-03-01' => 6000,
                '2019-04-01' => 6000,
                '2019-05-01' => 6000,
                '2019-06-01' => 6000,
                '2019-07-01' => 6000,
                '2019-08-01' => 6000,
                '2019-09-01' => 6000,
                '2019-10-01' => 6000,
                '2019-11-01' => 6000,
                '2019-12-01' => 6000,
            ],
            'PIS' => [
                '2019-01-01' => 1200,
                '2019-02-01' => 1200,
                '2019-03-01' => 1200,
                '2019-04-01' => 1200,
                '2019-05-01' => 1200,
                '2019-06-01' => 1200,
                '2019-07-01' => 1200,
                '2019-08-01' => 1200,
                '2019-09-01' => 1200,
                '2019-10-01' => 1200,
                '2019-11-01' => 1200,
                '2019-12-01' => 1200,
            ],
            'COFINS' => [
                '2019-01-01' => 1450,
                '2019-02-01' => 1450,
                '2019-03-01' => 1450,
                '2019-04-01' => 1450,
                '2019-05-01' => 1450,
                '2019-06-01' => 1450,
                '2019-07-01' => 1450,
                '2019-08-01' => 1450,
                '2019-09-01' => 1450,
                '2019-10-01' => 1450,
                '2019-11-01' => 1450,
                '2019-12-01' => 1450,
            ],
        ],
        'Distribuidores' => [
            'Dist. A' => [
                '2019-01-01' => 4000,
                '2019-02-01' => 4000,
                '2019-03-01' => 4000,
                '2019-04-01' => 4000,
                '2019-05-01' => 4000,
                '2019-06-01' => 4000,
                '2019-07-01' => 4000,
                '2019-08-01' => 4000,
                '2019-09-01' => 4000,
                '2019-10-01' => 4000,
                '2019-11-01' => 4000,
                '2019-12-01' => 4000,
            ],
            'Dist. B' => [
                '2019-01-01' => 3000,
                '2019-02-01' => 3000,
                '2019-03-01' => 3000,
                '2019-04-01' => 3000,
                '2019-05-01' => 3000,
                '2019-06-01' => 3000,
                '2019-07-01' => 3000,
                '2019-08-01' => 3000,
                '2019-09-01' => 3000,
                '2019-10-01' => 3000,
                '2019-11-01' => 3000,
                '2019-12-01' => 3000,
            ],
            'Dist. C' => [],
        ]
    ];

    public function run() {
        foreach ($this->data as $rootDescription => $childrenDescription) {
            foreach ($childrenDescription as $childDescription => $entries) {
                $group = DB::table('groups', 'g')
                    ->join('groups', 'groups.id', '=', 'g.group_id')
                    ->select(['g.*'])
                    ->where('groups.description', $rootDescription)
                    ->where('g.description', $childDescription)
                    ->first();

                foreach ($entries as $entryAt => $entryAmount) {
                    $entry = new Entry([
                        'at' => $entryAt,
                        'group_id' => $group->id,
                        'amount' => $entryAmount,
                    ]);

                    $entry->save();
                }
            }
        }
    }
}
