<?php

use Illuminate\Database\Seeder;

class NominationsTableSeeder extends Seeder
{
        private $noms =
'
	{
	  "nominations": [
	    {
	      "film": "2",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "1",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "3",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "5",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "1",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "1",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "2",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "2",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "2",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "10",
	      "category": "2",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "11",
	      "category": "2",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "1",
	      "category": "3",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "3",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "2",
	      "category": "3",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "3",
	      "category": "3",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "12",
	      "category": "3",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "5",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "5",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "10",
	      "category": "5",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "5",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "5",
	      "category": "5",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "10",
	      "category": "4",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "4",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "4",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "13",
	      "category": "4",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "4",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "2",
	      "category": "6",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "6",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "6",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "6",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "3",
	      "category": "6",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "2",
	      "category": "7",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "5",
	      "category": "7",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "11",
	      "category": "7",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "14",
	      "category": "7",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "1",
	      "category": "7",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "8",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "3",
	      "category": "8",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "8",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "8",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "8",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "15",
	      "category": "9",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "16",
	      "category": "9",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "17",
	      "category": "9",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "18",
	      "category": "9",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "2",
	      "category": "16",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "19",
	      "category": "11",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "5",
	      "category": "11",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "11",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "11",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "20",
	      "category": "11",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "15",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "15",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "15",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "9",
	      "category": "15",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "1",
	      "category": "15",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "19",
	      "category": "21",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "21",
	      "category": "21",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "21",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "21",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "21",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "19",
	      "category": "12",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "12",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "12",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "22",
	      "category": "12",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "23",
	      "category": "12",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "24",
	      "category": "18",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "21",
	      "category": "18",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "18",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "19",
	      "category": "19",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "19",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "19",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "19",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "20",
	      "category": "19",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "20",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "20",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "20",
	      "category": "20",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "25",
	      "category": "20",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "23",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "6",
	      "category": "23",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "23",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "8",
	      "category": "23",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "20",
	      "category": "23",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "4",
	      "category": "22",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "5",
	      "category": "22",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "22",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "20",
	      "category": "22",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "1",
	      "category": "22",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "26",
	      "category": "24",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "21",
	      "category": "24",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "7",
	      "category": "24",
	      "winner": "Y",
	      "year": "2012"
	    },
	    {
	      "film": "27",
	      "category": "24",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "23",
	      "category": "24",
	      "winner": "N",
	      "year": "2012"
	    },
	    {
	      "film": "49",
	      "category": "7",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "21",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "15",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "12",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "6",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "5",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "4",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "3",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "2",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "49",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "50",
	      "category": "8",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "50",
	      "category": "23",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "50",
	      "category": "22",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "50",
	      "category": "15",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "50",
	      "category": "5",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "50",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "51",
	      "category": "7",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "51",
	      "category": "18",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "51",
	      "category": "15",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "51",
	      "category": "5",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "51",
	      "category": "2",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "51",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "3",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "11",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "6",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "15",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "19",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "21",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "22",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "23",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "52",
	      "category": "24",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "53",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "53",
	      "category": "19",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "53",
	      "category": "20",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "53",
	      "category": "21",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "53",
	      "category": "7",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "54",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "54",
	      "category": "2",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "54",
	      "category": "4",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "54",
	      "category": "11",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "54",
	      "category": "6",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "54",
	      "category": "7",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "55",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "55",
	      "category": "3",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "55",
	      "category": "19",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "55",
	      "category": "8",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "1",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "2",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "5",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "4",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "12",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "6",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "15",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "21",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "56",
	      "category": "8",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "57",
	      "category": "1",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "57",
	      "category": "2",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "57",
	      "category": "5",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "57",
	      "category": "6",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "57",
	      "category": "8",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "58",
	      "category": "3",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "58",
	      "category": "4",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "58",
	      "category": "7",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "59",
	      "category": "3",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "59",
	      "category": "4",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "60",
	      "category": "9",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "61",
	      "category": "9",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "61",
	      "category": "20",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "62",
	      "category": "9",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "63",
	      "category": "9",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "63",
	      "category": "20",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "64",
	      "category": "9",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "65",
	      "category": "11",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "65",
	      "category": "12",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "66",
	      "category": "11",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "66",
	      "category": "23",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "67",
	      "category": "11",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "68",
	      "category": "12",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "68",
	      "category": "21",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "69",
	      "category": "12",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "70",
	      "category": "13",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "71",
	      "category": "13",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "72",
	      "category": "13",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "73",
	      "category": "13",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "74",
	      "category": "13",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "75",
	      "category": "14",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "76",
	      "category": "14",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "77",
	      "category": "14",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "78",
	      "category": "14",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "79",
	      "category": "14",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "80",
	      "category": "16",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "81",
	      "category": "16",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "82",
	      "category": "16",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "83",
	      "category": "16",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "84",
	      "category": "16",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "85",
	      "category": "18",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "86",
	      "category": "18",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "86",
	      "category": "24",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "87",
	      "category": "19",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "88",
	      "category": "19",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "89",
	      "category": "20",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "90",
	      "category": "10",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "91",
	      "category": "10",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "92",
	      "category": "10",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "93",
	      "category": "10",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "94",
	      "category": "10",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "95",
	      "category": "17",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "96",
	      "category": "17",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "97",
	      "category": "17",
	      "winner": "Y",
	      "year": "2013"
	    },
	    {
	      "film": "98",
	      "category": "17",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "99",
	      "category": "17",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "100",
	      "category": "22",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "101",
	      "category": "22",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "101",
	      "category": "23",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "101",
	      "category": "24",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "102",
	      "category": "22",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "102",
	      "category": "23",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "103",
	      "category": "24",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "104",
	      "category": "24",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "105",
	      "category": "8",
	      "winner": "N",
	      "year": "2013"
	    },
	    {
	      "film": "149",
	      "category": "3",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "220",
	      "category": "3",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "110",
	      "category": "3",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "200",
	      "category": "3",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "114",
	      "category": "3",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "110",
	      "category": "2",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "2",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "115",
	      "category": "2",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "2",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "116",
	      "category": "2",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "113",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "110",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "107",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "108",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "1",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "116",
	      "category": "1",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "4",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "108",
	      "category": "4",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "118",
	      "category": "4",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "4",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "149",
	      "category": "4",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "5",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "108",
	      "category": "5",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "115",
	      "category": "5",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "198",
	      "category": "5",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "113",
	      "category": "5",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "6",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "108",
	      "category": "6",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "115",
	      "category": "6",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "6",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "6",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "7",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "108",
	      "category": "7",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "115",
	      "category": "7",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "171",
	      "category": "7",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "7",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "116",
	      "category": "8",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "153",
	      "category": "8",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "8",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "110",
	      "category": "8",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "113",
	      "category": "8",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "193",
	      "category": "16",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "197",
	      "category": "16",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "196",
	      "category": "16",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "209",
	      "category": "16",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "208",
	      "category": "16",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "11",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "193",
	      "category": "11",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "117",
	      "category": "11",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "11",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "106",
	      "category": "11",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "153",
	      "category": "12",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "118",
	      "category": "12",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "176",
	      "category": "12",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "117",
	      "category": "12",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "12",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "115",
	      "category": "18",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "125",
	      "category": "18",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "18",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "120",
	      "category": "19",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "117",
	      "category": "19",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "19",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "19",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "110",
	      "category": "19",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "206",
	      "category": "20",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "228",
	      "category": "20",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "107",
	      "category": "20",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "124",
	      "category": "20",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "215",
	      "category": "13",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "217",
	      "category": "13",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "219",
	      "category": "13",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "116",
	      "category": "15",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "108",
	      "category": "15",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "15",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "15",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "113",
	      "category": "15",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "120",
	      "category": "21",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "118",
	      "category": "21",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "117",
	      "category": "21",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "112",
	      "category": "21",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "109",
	      "category": "21",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "116",
	      "category": "22",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "22",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "120",
	      "category": "22",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "152",
	      "category": "22",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "106",
	      "category": "22",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "116",
	      "category": "23",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "111",
	      "category": "23",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "120",
	      "category": "23",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "106",
	      "category": "23",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "113",
	      "category": "23",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "222",
	      "category": "24",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "154",
	      "category": "24",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "125",
	      "category": "24",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "120",
	      "category": "24",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "126",
	      "category": "24",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "167",
	      "category": "9",
	      "winner": "Y",
	      "year": "2014"
	    },
	    {
	      "film": "186",
	      "category": "9",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "184",
	      "category": "9",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "207",
	      "category": "9",
	      "winner": "N",
	      "year": "2014"
	    },
	    {
	      "film": "238",
	      "category": "3",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "255",
	      "category": "3",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "251",
	      "category": "2",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "2",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "2",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "254",
	      "category": "2",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "253",
	      "category": "2",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "342",
	      "category": "2",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "333",
	      "category": "2",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "343",
	      "category": "2",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "235",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "242",
	      "category": "1",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "243",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "238",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "236",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "244",
	      "category": "1",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "237",
	      "category": "3",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "247",
	      "category": "3",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "243",
	      "category": "3",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "244",
	      "category": "5",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "236",
	      "category": "5",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "233",
	      "category": "5",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "242",
	      "category": "5",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "5",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "237",
	      "category": "4",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "242",
	      "category": "4",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "253",
	      "category": "4",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "254",
	      "category": "4",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "234",
	      "category": "4",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "262",
	      "category": "9",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "261",
	      "category": "7",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "265",
	      "category": "9",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "237",
	      "category": "11",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "11",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "249",
	      "category": "11",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "234",
	      "category": "11",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "11",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "237",
	      "category": "12",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "299",
	      "category": "12",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "12",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "254",
	      "category": "12",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "12",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "244",
	      "category": "6",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "6",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "243",
	      "category": "6",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "242",
	      "category": "6",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "6",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "286",
	      "category": "13",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "287",
	      "category": "13",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "290",
	      "category": "13",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "244",
	      "category": "15",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "15",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "242",
	      "category": "15",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "250",
	      "category": "15",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "15",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "276",
	      "category": "16",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "285",
	      "category": "16",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "281",
	      "category": "16",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "18",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "18",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "296",
	      "category": "20",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "269",
	      "category": "20",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "297",
	      "category": "20",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "298",
	      "category": "20",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "236",
	      "category": "19",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "237",
	      "category": "19",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "249",
	      "category": "19",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "250",
	      "category": "19",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "234",
	      "category": "19",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "236",
	      "category": "21",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "21",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "254",
	      "category": "21",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "21",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "21",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "22",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "249",
	      "category": "22",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "250",
	      "category": "22",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "22",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "22",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "236",
	      "category": "23",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "23",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "250",
	      "category": "23",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "23",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "23",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "259",
	      "category": "24",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "241",
	      "category": "24",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "250",
	      "category": "24",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "24",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "235",
	      "category": "24",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "244",
	      "category": "8",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "238",
	      "category": "8",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "237",
	      "category": "8",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "243",
	      "category": "8",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "245",
	      "category": "8",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "236",
	      "category": "7",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "259",
	      "category": "7",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "261",
	      "category": "9",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "242",
	      "category": "7",
	      "winner": "Y",
	      "year": "2015"
	    },
	    {
	      "film": "258",
	      "category": "7",
	      "winner": "N",
	      "year": "2015"
	    },
	    {
	      "film": "330",
	      "category": "2",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "332",
	      "category": "2",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "334",
	      "category": "5",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "335",
	      "category": "5",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "332",
	      "category": "5",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "5",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "352",
	      "category": "5",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "345",
	      "category": "3",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "339",
	      "category": "3",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "346",
	      "category": "3",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "3",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "341",
	      "category": "3",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "343",
	      "category": "4",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "353",
	      "category": "4",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "335",
	      "category": "4",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "332",
	      "category": "4",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "4",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "358",
	      "category": "9",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "355",
	      "category": "9",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "359",
	      "category": "9",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "376",
	      "category": "9",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "360",
	      "category": "9",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "343",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "333",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "334",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "353",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "335",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "332",
	      "category": "1",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "1",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "366",
	      "category": "13",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "391",
	      "category": "13",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "393",
	      "category": "13",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "383",
	      "category": "13",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "384",
	      "category": "13",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "11",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "11",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "335",
	      "category": "11",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "11",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "369",
	      "category": "11",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "424",
	      "category": "16",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "363",
	      "category": "16",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "364",
	      "category": "16",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "397",
	      "category": "12",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "339",
	      "category": "12",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "346",
	      "category": "12",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "12",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "346",
	      "category": "19",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "19",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "335",
	      "category": "19",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "19",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "414",
	      "category": "19",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "385",
	      "category": "20",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "20",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "355",
	      "category": "20",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "354",
	      "category": "20",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "22",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "421",
	      "category": "22",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "333",
	      "category": "22",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "22",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "365",
	      "category": "22",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "23",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "333",
	      "category": "23",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "23",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "329",
	      "category": "23",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "21",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "397",
	      "category": "21",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "425",
	      "category": "21",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "21",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "414",
	      "category": "21",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "337",
	      "category": "7",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "334",
	      "category": "7",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "7",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "332",
	      "category": "7",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "347",
	      "category": "7",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "8",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "343",
	      "category": "8",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "353",
	      "category": "8",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "335",
	      "category": "8",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "8",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "15",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "333",
	      "category": "15",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "334",
	      "category": "15",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "15",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "15",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "421",
	      "category": "24",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "398",
	      "category": "24",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "358",
	      "category": "24",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "329",
	      "category": "24",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "367",
	      "category": "24",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "424",
	      "category": "18",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "402",
	      "category": "18",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "336",
	      "category": "6",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "333",
	      "category": "6",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "330",
	      "category": "6",
	      "winner": "Y",
	      "year": "2016"
	    },
	    {
	      "film": "332",
	      "category": "6",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "331",
	      "category": "6",
	      "winner": "N",
	      "year": "2016"
	    },
	    {
	      "film": "426",
	      "category": "18",
	      "winner": "Y",
	      "year": "2016"
	    }
	  ]
	}
';

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                DB::statement('SET FOREIGN_KEY_CHECKS=0;');

                $noms = json_decode($this->noms);

                DB::table('nominations')->truncate();

                foreach ($noms->nominations as $n) {
                        DB::table('nominations')->insert(
                            array(
                                'film'     => $n->film,
                                'category' => $n->category,
                                'winner'   => $n->winner,
                                'year'     => $n->year
                                )
                        );
                }

                DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
}
