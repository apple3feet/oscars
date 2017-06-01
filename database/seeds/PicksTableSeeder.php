<?php

use Illuminate\Database\Seeder;

class PicksTableSeeder extends Seeder
{
        private $picks =
'
	{
	  "picks": [
	    {
	      "film": "8",
	      "player": "5",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "4",
	      "player": "2",
	      "round": "1",
	      "turn": "2"
	    },
	    {
	      "film": "9",
	      "player": "7",
	      "round": "1",
	      "turn": "3"
	    },
	    {
	      "film": "6",
	      "player": "3",
	      "round": "1",
	      "turn": "4"
	    },
	    {
	      "film": "7",
	      "player": "6",
	      "round": "1",
	      "turn": "5"
	    },
	    {
	      "film": "14",
	      "player": "4",
	      "round": "1",
	      "turn": "6"
	    },
	    {
	      "film": "1",
	      "player": "4",
	      "round": "2",
	      "turn": "1"
	    },
	    {
	      "film": "20",
	      "player": "6",
	      "round": "2",
	      "turn": "2"
	    },
	    {
	      "film": "10",
	      "player": "3",
	      "round": "2",
	      "turn": "3"
	    },
	    {
	      "film": "5",
	      "player": "7",
	      "round": "2",
	      "turn": "4"
	    },
	    {
	      "film": "21",
	      "player": "2",
	      "round": "2",
	      "turn": "5"
	    },
	    {
	      "film": "11",
	      "player": "5",
	      "round": "3",
	      "turn": "1"
	    },
	    {
	      "film": "2",
	      "player": "7",
	      "round": "3",
	      "turn": "3"
	    },
	    {
	      "film": "12",
	      "player": "3",
	      "round": "3",
	      "turn": "4"
	    },
	    {
	      "film": "19",
	      "player": "4",
	      "round": "3",
	      "turn": "6"
	    },
	    {
	      "film": "3",
	      "player": "4",
	      "round": "4",
	      "turn": "1"
	    },
	    {
	      "film": "13",
	      "player": "6",
	      "round": "4",
	      "turn": "2"
	    },
	    {
	      "film": "15",
	      "player": "2",
	      "round": "4",
	      "turn": "5"
	    },
	    {
	      "film": "18",
	      "player": "6",
	      "round": "5",
	      "turn": "5"
	    },
	    {
	      "film": "16",
	      "player": "4",
	      "round": "5",
	      "turn": "6"
	    },
	    {
	      "film": "24",
	      "player": "6",
	      "round": "6",
	      "turn": "2"
	    },
	    {
	      "film": "27",
	      "player": "7",
	      "round": "6",
	      "turn": "4"
	    },
	    {
	      "film": "26",
	      "player": "2",
	      "round": "6",
	      "turn": "5"
	    },
	    {
	      "film": "22",
	      "player": "5",
	      "round": "7",
	      "turn": "1"
	    },
	    {
	      "film": "25",
	      "player": "4",
	      "round": "8",
	      "turn": "1"
	    },
	    {
	      "film": "17",
	      "player": "6",
	      "round": "8",
	      "turn": "2"
	    },
	    {
	      "film": "23",
	      "player": "3",
	      "round": "8",
	      "turn": "3"
	    },
	    {
	      "film": "29",
	      "player": "2",
	      "round": "3",
	      "turn": "2"
	    },
	    {
	      "film": "28",
	      "player": "5",
	      "round": "2",
	      "turn": "6"
	    },
	    {
	      "film": "30",
	      "player": "6",
	      "round": "3",
	      "turn": "5"
	    },
	    {
	      "film": "31",
	      "player": "3",
	      "round": "4",
	      "turn": "3"
	    },
	    {
	      "film": "32",
	      "player": "7",
	      "round": "4",
	      "turn": "4"
	    },
	    {
	      "film": "33",
	      "player": "5",
	      "round": "4",
	      "turn": "6"
	    },
	    {
	      "film": "34",
	      "player": "5",
	      "round": "5",
	      "turn": "1"
	    },
	    {
	      "film": "35",
	      "player": "2",
	      "round": "5",
	      "turn": "2"
	    },
	    {
	      "film": "36",
	      "player": "7",
	      "round": "5",
	      "turn": "3"
	    },
	    {
	      "film": "37",
	      "player": "3",
	      "round": "5",
	      "turn": "4"
	    },
	    {
	      "film": "38",
	      "player": "4",
	      "round": "6",
	      "turn": "1"
	    },
	    {
	      "film": "39",
	      "player": "3",
	      "round": "6",
	      "turn": "3"
	    },
	    {
	      "film": "40",
	      "player": "5",
	      "round": "6",
	      "turn": "6"
	    },
	    {
	      "film": "41",
	      "player": "2",
	      "round": "7",
	      "turn": "2"
	    },
	    {
	      "film": "42",
	      "player": "7",
	      "round": "7",
	      "turn": "3"
	    },
	    {
	      "film": "43",
	      "player": "3",
	      "round": "7",
	      "turn": "4"
	    },
	    {
	      "film": "44",
	      "player": "6",
	      "round": "7",
	      "turn": "5"
	    },
	    {
	      "film": "45",
	      "player": "4",
	      "round": "7",
	      "turn": "6"
	    },
	    {
	      "film": "46",
	      "player": "7",
	      "round": "8",
	      "turn": "4"
	    },
	    {
	      "film": "47",
	      "player": "2",
	      "round": "8",
	      "turn": "5"
	    },
	    {
	      "film": "48",
	      "player": "5",
	      "round": "8",
	      "turn": "6"
	    },
	    {
	      "film": "61",
	      "player": "9",
	      "round": "3",
	      "turn": "6"
	    },
	    {
	      "film": "59",
	      "player": "11",
	      "round": "3",
	      "turn": "5"
	    },
	    {
	      "film": "88",
	      "player": "10",
	      "round": "3",
	      "turn": "4"
	    },
	    {
	      "film": "63",
	      "player": "13",
	      "round": "3",
	      "turn": "2"
	    },
	    {
	      "film": "58",
	      "player": "8",
	      "round": "3",
	      "turn": "1"
	    },
	    {
	      "film": "55",
	      "player": "8",
	      "round": "2",
	      "turn": "6"
	    },
	    {
	      "film": "54",
	      "player": "13",
	      "round": "2",
	      "turn": "5"
	    },
	    {
	      "film": "50",
	      "player": "12",
	      "round": "2",
	      "turn": "4"
	    },
	    {
	      "film": "53",
	      "player": "10",
	      "round": "2",
	      "turn": "3"
	    },
	    {
	      "film": "57",
	      "player": "11",
	      "round": "2",
	      "turn": "2"
	    },
	    {
	      "film": "51",
	      "player": "9",
	      "round": "2",
	      "turn": "1"
	    },
	    {
	      "film": "68",
	      "player": "9",
	      "round": "4",
	      "turn": "1"
	    },
	    {
	      "film": "101",
	      "player": "12",
	      "round": "3",
	      "turn": "3"
	    },
	    {
	      "film": "60",
	      "player": "10",
	      "round": "4",
	      "turn": "3"
	    },
	    {
	      "film": "89",
	      "player": "12",
	      "round": "4",
	      "turn": "4"
	    },
	    {
	      "film": "82",
	      "player": "13",
	      "round": "4",
	      "turn": "5"
	    },
	    {
	      "film": "80",
	      "player": "8",
	      "round": "5",
	      "turn": "1"
	    },
	    {
	      "film": "81",
	      "player": "13",
	      "round": "5",
	      "turn": "2"
	    },
	    {
	      "film": "65",
	      "player": "12",
	      "round": "5",
	      "turn": "3"
	    },
	    {
	      "film": "105",
	      "player": "11",
	      "round": "4",
	      "turn": "2"
	    },
	    {
	      "film": "67",
	      "player": "10",
	      "round": "5",
	      "turn": "4"
	    },
	    {
	      "film": "104",
	      "player": "8",
	      "round": "4",
	      "turn": "6"
	    },
	    {
	      "film": "102",
	      "player": "11",
	      "round": "5",
	      "turn": "5"
	    },
	    {
	      "film": "66",
	      "player": "9",
	      "round": "5",
	      "turn": "6"
	    },
	    {
	      "film": "103",
	      "player": "9",
	      "round": "6",
	      "turn": "1"
	    },
	    {
	      "film": "87",
	      "player": "11",
	      "round": "6",
	      "turn": "2"
	    },
	    {
	      "film": "86",
	      "player": "10",
	      "round": "6",
	      "turn": "3"
	    },
	    {
	      "film": "69",
	      "player": "12",
	      "round": "6",
	      "turn": "4"
	    },
	    {
	      "film": "74",
	      "player": "13",
	      "round": "6",
	      "turn": "5"
	    },
	    {
	      "film": "92",
	      "player": "8",
	      "round": "6",
	      "turn": "6"
	    },
	    {
	      "film": "85",
	      "player": "8",
	      "round": "7",
	      "turn": "1"
	    },
	    {
	      "film": "97",
	      "player": "13",
	      "round": "7",
	      "turn": "2"
	    },
	    {
	      "film": "71",
	      "player": "12",
	      "round": "7",
	      "turn": "3"
	    },
	    {
	      "film": "95",
	      "player": "10",
	      "round": "7",
	      "turn": "4"
	    },
	    {
	      "film": "96",
	      "player": "11",
	      "round": "7",
	      "turn": "5"
	    },
	    {
	      "film": "70",
	      "player": "9",
	      "round": "7",
	      "turn": "6"
	    },
	    {
	      "film": "90",
	      "player": "9",
	      "round": "8",
	      "turn": "1"
	    },
	    {
	      "film": "72",
	      "player": "10",
	      "round": "8",
	      "turn": "3"
	    },
	    {
	      "film": "91",
	      "player": "11",
	      "round": "8",
	      "turn": "2"
	    },
	    {
	      "film": "84",
	      "player": "12",
	      "round": "8",
	      "turn": "4"
	    },
	    {
	      "film": "94",
	      "player": "13",
	      "round": "8",
	      "turn": "5"
	    },
	    {
	      "film": "62",
	      "player": "8",
	      "round": "9",
	      "turn": "1"
	    },
	    {
	      "film": "100",
	      "player": "8",
	      "round": "8",
	      "turn": "6"
	    },
	    {
	      "film": "99",
	      "player": "13",
	      "round": "9",
	      "turn": "2"
	    },
	    {
	      "film": "83",
	      "player": "12",
	      "round": "9",
	      "turn": "3"
	    },
	    {
	      "film": "78",
	      "player": "10",
	      "round": "9",
	      "turn": "4"
	    },
	    {
	      "film": "73",
	      "player": "11",
	      "round": "9",
	      "turn": "5"
	    },
	    {
	      "film": "98",
	      "player": "9",
	      "round": "9",
	      "turn": "6"
	    },
	    {
	      "film": "49",
	      "player": "8",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "49",
	      "player": "13",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "52",
	      "player": "11",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "52",
	      "player": "10",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "56",
	      "player": "9",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "56",
	      "player": "12",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "64",
	      "player": "8",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "75",
	      "player": "9",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "76",
	      "player": "10",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "77",
	      "player": "11",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "79",
	      "player": "12",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "93",
	      "player": "13",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "116",
	      "player": "19",
	      "round": "2",
	      "turn": "5"
	    },
	    {
	      "film": "112",
	      "player": "16",
	      "round": "2",
	      "turn": "4"
	    },
	    {
	      "film": "190",
	      "player": "20",
	      "round": "2",
	      "turn": "3"
	    },
	    {
	      "film": "106",
	      "player": "15",
	      "round": "2",
	      "turn": "2"
	    },
	    {
	      "film": "115",
	      "player": "18",
	      "round": "2",
	      "turn": "1"
	    },
	    {
	      "film": "110",
	      "player": "18",
	      "round": "1",
	      "turn": "6"
	    },
	    {
	      "film": "109",
	      "player": "15",
	      "round": "1",
	      "turn": "5"
	    },
	    {
	      "film": "118",
	      "player": "20",
	      "round": "1",
	      "turn": "4"
	    },
	    {
	      "film": "108",
	      "player": "16",
	      "round": "1",
	      "turn": "3"
	    },
	    {
	      "film": "111",
	      "player": "19",
	      "round": "1",
	      "turn": "2"
	    },
	    {
	      "film": "107",
	      "player": "17",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "119",
	      "player": "17",
	      "round": "2",
	      "turn": "6"
	    },
	    {
	      "film": "171",
	      "player": "17",
	      "round": "3",
	      "turn": "1"
	    },
	    {
	      "film": "120",
	      "player": "19",
	      "round": "3",
	      "turn": "2"
	    },
	    {
	      "film": "200",
	      "player": "16",
	      "round": "3",
	      "turn": "3"
	    },
	    {
	      "film": "124",
	      "player": "20",
	      "round": "3",
	      "turn": "4"
	    },
	    {
	      "film": "211",
	      "player": "15",
	      "round": "3",
	      "turn": "5"
	    },
	    {
	      "film": "114",
	      "player": "18",
	      "round": "3",
	      "turn": "6"
	    },
	    {
	      "film": "113",
	      "player": "18",
	      "round": "4",
	      "turn": "1"
	    },
	    {
	      "film": "169",
	      "player": "15",
	      "round": "4",
	      "turn": "2"
	    },
	    {
	      "film": "197",
	      "player": "20",
	      "round": "4",
	      "turn": "3"
	    },
	    {
	      "film": "220",
	      "player": "16",
	      "round": "4",
	      "turn": "4"
	    },
	    {
	      "film": "151",
	      "player": "19",
	      "round": "4",
	      "turn": "5"
	    },
	    {
	      "film": "149",
	      "player": "17",
	      "round": "4",
	      "turn": "6"
	    },
	    {
	      "film": "193",
	      "player": "17",
	      "round": "5",
	      "turn": "1"
	    },
	    {
	      "film": "186",
	      "player": "19",
	      "round": "5",
	      "turn": "2"
	    },
	    {
	      "film": "188",
	      "player": "16",
	      "round": "5",
	      "turn": "3"
	    },
	    {
	      "film": "229",
	      "player": "20",
	      "round": "5",
	      "turn": "4"
	    },
	    {
	      "film": "206",
	      "player": "15",
	      "round": "5",
	      "turn": "5"
	    },
	    {
	      "film": "161",
	      "player": "18",
	      "round": "5",
	      "turn": "6"
	    },
	    {
	      "film": "228",
	      "player": "18",
	      "round": "6",
	      "turn": "1"
	    },
	    {
	      "film": "176",
	      "player": "15",
	      "round": "6",
	      "turn": "2"
	    },
	    {
	      "film": "219",
	      "player": "20",
	      "round": "6",
	      "turn": "3"
	    },
	    {
	      "film": "215",
	      "player": "16",
	      "round": "6",
	      "turn": "4"
	    },
	    {
	      "film": "123",
	      "player": "19",
	      "round": "6",
	      "turn": "5"
	    },
	    {
	      "film": "167",
	      "player": "17",
	      "round": "7",
	      "turn": "1"
	    },
	    {
	      "film": "153",
	      "player": "17",
	      "round": "6",
	      "turn": "6"
	    },
	    {
	      "film": "208",
	      "player": "19",
	      "round": "7",
	      "turn": "2"
	    },
	    {
	      "film": "199",
	      "player": "16",
	      "round": "7",
	      "turn": "3"
	    },
	    {
	      "film": "162",
	      "player": "20",
	      "round": "7",
	      "turn": "4"
	    },
	    {
	      "film": "191",
	      "player": "15",
	      "round": "7",
	      "turn": "5"
	    },
	    {
	      "film": "194",
	      "player": "18",
	      "round": "7",
	      "turn": "6"
	    },
	    {
	      "film": "156",
	      "player": "18",
	      "round": "8",
	      "turn": "1"
	    },
	    {
	      "film": "185",
	      "player": "15",
	      "round": "8",
	      "turn": "2"
	    },
	    {
	      "film": "125",
	      "player": "20",
	      "round": "8",
	      "turn": "3"
	    },
	    {
	      "film": "117",
	      "player": "16",
	      "round": "8",
	      "turn": "4"
	    },
	    {
	      "film": "150",
	      "player": "19",
	      "round": "8",
	      "turn": "5"
	    },
	    {
	      "film": "187",
	      "player": "17",
	      "round": "8",
	      "turn": "6"
	    },
	    {
	      "film": "154",
	      "player": "17",
	      "round": "9",
	      "turn": "1"
	    },
	    {
	      "film": "223",
	      "player": "19",
	      "round": "9",
	      "turn": "2"
	    },
	    {
	      "film": "155",
	      "player": "16",
	      "round": "9",
	      "turn": "3"
	    },
	    {
	      "film": "214",
	      "player": "20",
	      "round": "9",
	      "turn": "4"
	    },
	    {
	      "film": "213",
	      "player": "15",
	      "round": "9",
	      "turn": "5"
	    },
	    {
	      "film": "222",
	      "player": "18",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "198",
	      "player": "18",
	      "round": "9",
	      "turn": "6"
	    },
	    {
	      "film": "168",
	      "player": "15",
	      "round": "10",
	      "turn": "2"
	    },
	    {
	      "film": "205",
	      "player": "20",
	      "round": "10",
	      "turn": "3"
	    },
	    {
	      "film": "184",
	      "player": "16",
	      "round": "10",
	      "turn": "4"
	    },
	    {
	      "film": "224",
	      "player": "19",
	      "round": "10",
	      "turn": "5"
	    },
	    {
	      "film": "217",
	      "player": "17",
	      "round": "10",
	      "turn": "6"
	    },
	    {
	      "film": "192",
	      "player": "17",
	      "round": "11",
	      "turn": "1"
	    },
	    {
	      "film": "207",
	      "player": "19",
	      "round": "11",
	      "turn": "2"
	    },
	    {
	      "film": "203",
	      "player": "16",
	      "round": "11",
	      "turn": "3"
	    },
	    {
	      "film": "212",
	      "player": "20",
	      "round": "11",
	      "turn": "4"
	    },
	    {
	      "film": "216",
	      "player": "15",
	      "round": "11",
	      "turn": "5"
	    },
	    {
	      "film": "210",
	      "player": "18",
	      "round": "11",
	      "turn": "6"
	    },
	    {
	      "film": "189",
	      "player": "18",
	      "round": "12",
	      "turn": "1"
	    },
	    {
	      "film": "225",
	      "player": "15",
	      "round": "12",
	      "turn": "2"
	    },
	    {
	      "film": "173",
	      "player": "20",
	      "round": "12",
	      "turn": "3"
	    },
	    {
	      "film": "230",
	      "player": "16",
	      "round": "12",
	      "turn": "4"
	    },
	    {
	      "film": "152",
	      "player": "19",
	      "round": "12",
	      "turn": "5"
	    },
	    {
	      "film": "182",
	      "player": "17",
	      "round": "13",
	      "turn": "1"
	    },
	    {
	      "film": "181",
	      "player": "17",
	      "round": "13",
	      "turn": "1"
	    },
	    {
	      "film": "163",
	      "player": "19",
	      "round": "13",
	      "turn": "2"
	    },
	    {
	      "film": "202",
	      "player": "16",
	      "round": "13",
	      "turn": "3"
	    },
	    {
	      "film": "218",
	      "player": "20",
	      "round": "13",
	      "turn": "4"
	    },
	    {
	      "film": "209",
	      "player": "15",
	      "round": "13",
	      "turn": "5"
	    },
	    {
	      "film": "226",
	      "player": "18",
	      "round": "13",
	      "turn": "6"
	    },
	    {
	      "film": "175",
	      "player": "18",
	      "round": "14",
	      "turn": "1"
	    },
	    {
	      "film": "174",
	      "player": "15",
	      "round": "14",
	      "turn": "2"
	    },
	    {
	      "film": "227",
	      "player": "20",
	      "round": "14",
	      "turn": "3"
	    },
	    {
	      "film": "165",
	      "player": "16",
	      "round": "14",
	      "turn": "4"
	    },
	    {
	      "film": "122",
	      "player": "19",
	      "round": "14",
	      "turn": "5"
	    },
	    {
	      "film": "196",
	      "player": "17",
	      "round": "14",
	      "turn": "6"
	    },
	    {
	      "film": "179",
	      "player": "17",
	      "round": "15",
	      "turn": "1"
	    },
	    {
	      "film": "166",
	      "player": "19",
	      "round": "15",
	      "turn": "2"
	    },
	    {
	      "film": "183",
	      "player": "16",
	      "round": "15",
	      "turn": "3"
	    },
	    {
	      "film": "164",
	      "player": "20",
	      "round": "15",
	      "turn": "4"
	    },
	    {
	      "film": "201",
	      "player": "15",
	      "round": "15",
	      "turn": "5"
	    },
	    {
	      "film": "126",
	      "player": "18",
	      "round": "15",
	      "turn": "6"
	    },
	    {
	      "film": "157",
	      "player": "18",
	      "round": "16",
	      "turn": "1"
	    },
	    {
	      "film": "195",
	      "player": "15",
	      "round": "16",
	      "turn": "2"
	    },
	    {
	      "film": "221",
	      "player": "20",
	      "round": "16",
	      "turn": "3"
	    },
	    {
	      "film": "180",
	      "player": "16",
	      "round": "16",
	      "turn": "4"
	    },
	    {
	      "film": "170",
	      "player": "17",
	      "round": "16",
	      "turn": "6"
	    },
	    {
	      "film": "177",
	      "player": "19",
	      "round": "16",
	      "turn": "5"
	    },
	    {
	      "film": "261",
	      "player": "26",
	      "round": "2",
	      "turn": "3"
	    },
	    {
	      "film": "244",
	      "player": "25",
	      "round": "2",
	      "turn": "2"
	    },
	    {
	      "film": "233",
	      "player": "27",
	      "round": "2",
	      "turn": "1"
	    },
	    {
	      "film": "237",
	      "player": "22",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "238",
	      "player": "27",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "236",
	      "player": "24",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "235",
	      "player": "25",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "245",
	      "player": "23",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "242",
	      "player": "24",
	      "round": "2",
	      "turn": "4"
	    },
	    {
	      "film": "243",
	      "player": "23",
	      "round": "2",
	      "turn": "5"
	    },
	    {
	      "film": "241",
	      "player": "21",
	      "round": "2",
	      "turn": "6"
	    },
	    {
	      "film": "305",
	      "player": "22",
	      "round": "2",
	      "turn": "7"
	    },
	    {
	      "film": "317",
	      "player": "22",
	      "round": "3",
	      "turn": "1"
	    },
	    {
	      "film": "249",
	      "player": "21",
	      "round": "3",
	      "turn": "2"
	    },
	    {
	      "film": "253",
	      "player": "23",
	      "round": "3",
	      "turn": "3"
	    },
	    {
	      "film": "258",
	      "player": "24",
	      "round": "3",
	      "turn": "4"
	    },
	    {
	      "film": "259",
	      "player": "26",
	      "round": "3",
	      "turn": "5"
	    },
	    {
	      "film": "251",
	      "player": "25",
	      "round": "3",
	      "turn": "6"
	    },
	    {
	      "film": "273",
	      "player": "27",
	      "round": "3",
	      "turn": "7"
	    },
	    {
	      "film": "318",
	      "player": "27",
	      "round": "4",
	      "turn": "1"
	    },
	    {
	      "film": "247",
	      "player": "25",
	      "round": "4",
	      "turn": "2"
	    },
	    {
	      "film": "234",
	      "player": "26",
	      "round": "4",
	      "turn": "3"
	    },
	    {
	      "film": "254",
	      "player": "24",
	      "round": "4",
	      "turn": "4"
	    },
	    {
	      "film": "285",
	      "player": "23",
	      "round": "4",
	      "turn": "5"
	    },
	    {
	      "film": "252",
	      "player": "21",
	      "round": "4",
	      "turn": "6"
	    },
	    {
	      "film": "289",
	      "player": "22",
	      "round": "4",
	      "turn": "7"
	    },
	    {
	      "film": "260",
	      "player": "22",
	      "round": "5",
	      "turn": "1"
	    },
	    {
	      "film": "298",
	      "player": "21",
	      "round": "5",
	      "turn": "2"
	    },
	    {
	      "film": "262",
	      "player": "23",
	      "round": "5",
	      "turn": "3"
	    },
	    {
	      "film": "301",
	      "player": "24",
	      "round": "5",
	      "turn": "4"
	    },
	    {
	      "film": "250",
	      "player": "26",
	      "round": "5",
	      "turn": "5"
	    },
	    {
	      "film": "293",
	      "player": "25",
	      "round": "5",
	      "turn": "6"
	    },
	    {
	      "film": "283",
	      "player": "27",
	      "round": "5",
	      "turn": "7"
	    },
	    {
	      "film": "248",
	      "player": "27",
	      "round": "6",
	      "turn": "1"
	    },
	    {
	      "film": "264",
	      "player": "25",
	      "round": "6",
	      "turn": "2"
	    },
	    {
	      "film": "294",
	      "player": "26",
	      "round": "6",
	      "turn": "3"
	    },
	    {
	      "film": "255",
	      "player": "24",
	      "round": "6",
	      "turn": "4"
	    },
	    {
	      "film": "286",
	      "player": "23",
	      "round": "6",
	      "turn": "5"
	    },
	    {
	      "film": "276",
	      "player": "21",
	      "round": "6",
	      "turn": "6"
	    },
	    {
	      "film": "240",
	      "player": "22",
	      "round": "6",
	      "turn": "7"
	    },
	    {
	      "film": "324",
	      "player": "23",
	      "round": "7",
	      "turn": "3"
	    },
	    {
	      "film": "274",
	      "player": "21",
	      "round": "7",
	      "turn": "2"
	    },
	    {
	      "film": "275",
	      "player": "24",
	      "round": "7",
	      "turn": "4"
	    },
	    {
	      "film": "282",
	      "player": "26",
	      "round": "7",
	      "turn": "5"
	    },
	    {
	      "film": "246",
	      "player": "25",
	      "round": "7",
	      "turn": "6"
	    },
	    {
	      "film": "279",
	      "player": "27",
	      "round": "7",
	      "turn": "7"
	    },
	    {
	      "film": "292",
	      "player": "27",
	      "round": "8",
	      "turn": "1"
	    },
	    {
	      "film": "257",
	      "player": "25",
	      "round": "8",
	      "turn": "2"
	    },
	    {
	      "film": "308",
	      "player": "26",
	      "round": "8",
	      "turn": "3"
	    },
	    {
	      "film": "306",
	      "player": "23",
	      "round": "8",
	      "turn": "5"
	    },
	    {
	      "film": "263",
	      "player": "21",
	      "round": "8",
	      "turn": "6"
	    },
	    {
	      "film": "300",
	      "player": "22",
	      "round": "8",
	      "turn": "7"
	    },
	    {
	      "film": "278",
	      "player": "22",
	      "round": "9",
	      "turn": "1"
	    },
	    {
	      "film": "287",
	      "player": "21",
	      "round": "9",
	      "turn": "2"
	    },
	    {
	      "film": "269",
	      "player": "23",
	      "round": "9",
	      "turn": "3"
	    },
	    {
	      "film": "290",
	      "player": "24",
	      "round": "9",
	      "turn": "4"
	    },
	    {
	      "film": "256",
	      "player": "26",
	      "round": "9",
	      "turn": "5"
	    },
	    {
	      "film": "303",
	      "player": "25",
	      "round": "9",
	      "turn": "6"
	    },
	    {
	      "film": "288",
	      "player": "27",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "297",
	      "player": "27",
	      "round": "9",
	      "turn": "7"
	    },
	    {
	      "film": "277",
	      "player": "25",
	      "round": "10",
	      "turn": "2"
	    },
	    {
	      "film": "307",
	      "player": "26",
	      "round": "10",
	      "turn": "3"
	    },
	    {
	      "film": "239",
	      "player": "24",
	      "round": "10",
	      "turn": "4"
	    },
	    {
	      "film": "309",
	      "player": "23",
	      "round": "10",
	      "turn": "5"
	    },
	    {
	      "film": "304",
	      "player": "21",
	      "round": "10",
	      "turn": "6"
	    },
	    {
	      "film": "296",
	      "player": "22",
	      "round": "10",
	      "turn": "7"
	    },
	    {
	      "film": "325",
	      "player": "22",
	      "round": "7",
	      "turn": "1"
	    },
	    {
	      "film": "326",
	      "player": "24",
	      "round": "8",
	      "turn": "4"
	    },
	    {
	      "film": "235",
	      "player": "21",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "235",
	      "player": "26",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "341",
	      "player": "33",
	      "round": "2",
	      "turn": "2"
	    },
	    {
	      "film": "339",
	      "player": "36",
	      "round": "2",
	      "turn": "1"
	    },
	    {
	      "film": "336",
	      "player": "35",
	      "round": "2",
	      "turn": "3"
	    },
	    {
	      "film": "352",
	      "player": "31",
	      "round": "2",
	      "turn": "4"
	    },
	    {
	      "film": "343",
	      "player": "32",
	      "round": "2",
	      "turn": "5"
	    },
	    {
	      "film": "334",
	      "player": "34",
	      "round": "2",
	      "turn": "6"
	    },
	    {
	      "film": "333",
	      "player": "29",
	      "round": "2",
	      "turn": "7"
	    },
	    {
	      "film": "420",
	      "player": "29",
	      "round": "3",
	      "turn": "1"
	    },
	    {
	      "film": "412",
	      "player": "34",
	      "round": "3",
	      "turn": "2"
	    },
	    {
	      "film": "335",
	      "player": "32",
	      "round": "3",
	      "turn": "3"
	    },
	    {
	      "film": "353",
	      "player": "31",
	      "round": "3",
	      "turn": "4"
	    },
	    {
	      "film": "385",
	      "player": "35",
	      "round": "3",
	      "turn": "5"
	    },
	    {
	      "film": "369",
	      "player": "33",
	      "round": "3",
	      "turn": "6"
	    },
	    {
	      "film": "346",
	      "player": "36",
	      "round": "3",
	      "turn": "7"
	    },
	    {
	      "film": "329",
	      "player": "36",
	      "round": "4",
	      "turn": "1"
	    },
	    {
	      "film": "358",
	      "player": "33",
	      "round": "4",
	      "turn": "2"
	    },
	    {
	      "film": "365",
	      "player": "35",
	      "round": "4",
	      "turn": "3"
	    },
	    {
	      "film": "384",
	      "player": "31",
	      "round": "4",
	      "turn": "4"
	    },
	    {
	      "film": "345",
	      "player": "32",
	      "round": "4",
	      "turn": "5"
	    },
	    {
	      "film": "360",
	      "player": "34",
	      "round": "4",
	      "turn": "6"
	    },
	    {
	      "film": "418",
	      "player": "29",
	      "round": "4",
	      "turn": "7"
	    },
	    {
	      "film": "337",
	      "player": "29",
	      "round": "5",
	      "turn": "1"
	    },
	    {
	      "film": "355",
	      "player": "34",
	      "round": "5",
	      "turn": "2"
	    },
	    {
	      "film": "344",
	      "player": "32",
	      "round": "5",
	      "turn": "3"
	    },
	    {
	      "film": "376",
	      "player": "31",
	      "round": "5",
	      "turn": "4"
	    },
	    {
	      "film": "395",
	      "player": "35",
	      "round": "5",
	      "turn": "5"
	    },
	    {
	      "film": "394",
	      "player": "33",
	      "round": "5",
	      "turn": "6"
	    },
	    {
	      "film": "340",
	      "player": "36",
	      "round": "5",
	      "turn": "7"
	    },
	    {
	      "film": "403",
	      "player": "36",
	      "round": "6",
	      "turn": "1"
	    },
	    {
	      "film": "347",
	      "player": "33",
	      "round": "6",
	      "turn": "2"
	    },
	    {
	      "film": "398",
	      "player": "35",
	      "round": "6",
	      "turn": "3"
	    },
	    {
	      "film": "397",
	      "player": "31",
	      "round": "6",
	      "turn": "4"
	    },
	    {
	      "film": "366",
	      "player": "32",
	      "round": "6",
	      "turn": "5"
	    },
	    {
	      "film": "421",
	      "player": "34",
	      "round": "6",
	      "turn": "6"
	    },
	    {
	      "film": "342",
	      "player": "29",
	      "round": "7",
	      "turn": "1"
	    },
	    {
	      "film": "408",
	      "player": "29",
	      "round": "6",
	      "turn": "7"
	    },
	    {
	      "film": "362",
	      "player": "34",
	      "round": "7",
	      "turn": "2"
	    },
	    {
	      "film": "338",
	      "player": "32",
	      "round": "7",
	      "turn": "3"
	    },
	    {
	      "film": "351",
	      "player": "31",
	      "round": "7",
	      "turn": "4"
	    },
	    {
	      "film": "361",
	      "player": "35",
	      "round": "7",
	      "turn": "5"
	    },
	    {
	      "film": "364",
	      "player": "33",
	      "round": "7",
	      "turn": "2"
	    },
	    {
	      "film": "363",
	      "player": "36",
	      "round": "7",
	      "turn": "7"
	    },
	    {
	      "film": "359",
	      "player": "36",
	      "round": "8",
	      "turn": "1"
	    },
	    {
	      "film": "387",
	      "player": "33",
	      "round": "8",
	      "turn": "2"
	    },
	    {
	      "film": "409",
	      "player": "35",
	      "round": "8",
	      "turn": "3"
	    },
	    {
	      "film": "367",
	      "player": "31",
	      "round": "8",
	      "turn": "4"
	    },
	    {
	      "film": "354",
	      "player": "32",
	      "round": "8",
	      "turn": "5"
	    },
	    {
	      "film": "389",
	      "player": "34",
	      "round": "8",
	      "turn": "6"
	    },
	    {
	      "film": "372",
	      "player": "29",
	      "round": "8",
	      "turn": "7"
	    },
	    {
	      "film": "375",
	      "player": "29",
	      "round": "9",
	      "turn": "1"
	    },
	    {
	      "film": "393",
	      "player": "34",
	      "round": "9",
	      "turn": "2"
	    },
	    {
	      "film": "350",
	      "player": "32",
	      "round": "9",
	      "turn": "3"
	    },
	    {
	      "film": "424",
	      "player": "31",
	      "round": "9",
	      "turn": "4"
	    },
	    {
	      "film": "388",
	      "player": "35",
	      "round": "9",
	      "turn": "5"
	    },
	    {
	      "film": "411",
	      "player": "33",
	      "round": "9",
	      "turn": "6"
	    },
	    {
	      "film": "383",
	      "player": "36",
	      "round": "9",
	      "turn": "7"
	    },
	    {
	      "film": "391",
	      "player": "36",
	      "round": "10",
	      "turn": "1"
	    },
	    {
	      "film": "425",
	      "player": "33",
	      "round": "10",
	      "turn": "2"
	    },
	    {
	      "film": "371",
	      "player": "35",
	      "round": "10",
	      "turn": "3"
	    },
	    {
	      "film": "368",
	      "player": "31",
	      "round": "10",
	      "turn": "4"
	    },
	    {
	      "film": "392",
	      "player": "32",
	      "round": "10",
	      "turn": "5"
	    },
	    {
	      "film": "415",
	      "player": "34",
	      "round": "10",
	      "turn": "6"
	    },
	    {
	      "film": "348",
	      "player": "29",
	      "round": "10",
	      "turn": "7"
	    },
	    {
	      "film": "396",
	      "player": "29",
	      "round": "11",
	      "turn": "1"
	    },
	    {
	      "film": "406",
	      "player": "34",
	      "round": "11",
	      "turn": "2"
	    },
	    {
	      "film": "373",
	      "player": "32",
	      "round": "11",
	      "turn": "3"
	    },
	    {
	      "film": "419",
	      "player": "31",
	      "round": "11",
	      "turn": "4"
	    },
	    {
	      "film": "370",
	      "player": "35",
	      "round": "11",
	      "turn": "5"
	    },
	    {
	      "film": "405",
	      "player": "33",
	      "round": "11",
	      "turn": "6"
	    },
	    {
	      "film": "402",
	      "player": "36",
	      "round": "11",
	      "turn": "7"
	    },
	    {
	      "film": "331",
	      "player": "36",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "332",
	      "player": "33",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "331",
	      "player": "35",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "330",
	      "player": "31",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "330",
	      "player": "32",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "330",
	      "player": "34",
	      "round": "1",
	      "turn": "1"
	    },
	    {
	      "film": "331",
	      "player": "29",
	      "round": "1",
	      "turn": "1"
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

                $picks = json_decode($this->picks);

                DB::table('picks')->truncate();

                foreach ($picks->picks as $p) {
                        DB::table('picks')->insert(
                            array(
                                'film'   => $p->film,
                                'player' => $p->player,
                                'round'  => $p->round,
                                'turn'   => $p->turn
                                )
                        );
                }

                DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
}
