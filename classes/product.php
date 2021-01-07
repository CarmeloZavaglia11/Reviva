<?php

    class Product {

        public $name;
        public $quantity;
        protected $category;
        public $imported;
        public $price;
        protected $salestax;
        protected $importduty;
        protected $totalSalesTaxes;
        protected $totalImportDuty;
        public $totalTaxes;
        public $total;

        public function __construct($_name,$_quantity,$_category,$_imported,$_price) {

            $this->name = $_name;
            $this->quantity = $_quantity;
            $this->price = $_price;
            $this->imported = $_imported;
            $this->category = $_category;
            $this->total = $this->quantity * $this->price;

        }

        public function calculateTaxes() {

            $arrayTypeTriggered = ['book','food','medical'];

            if (!in_array($this->category,$arrayTypeTriggered)) {
                $this->salestax = 10; 
            } else {
                $this->salestax = 0;
            }

            if ($this->imported == 'TRUE') {
                $this->importduty = 5;
            } else {
                $this->importduty = 0;
            }

            $this->totalSalesTaxes = ceil(($this->total * $this->salestax / 100) * 2, 1) / 2;

            $this->totalImportDuty = ceil(($this->total * $this->importduty / 100) * 2, 1) / 2;

            $this->totalTaxes = $this->totalSalesTaxes + $this->totalImportDuty;

            return $this->total += $this->totalTaxes;

        }

    }

//     Copyright [2020] [Carmelo Zavaglia]

// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at

//   http://www.apache.org/licenses/LICENSE-2.0

// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.