<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
        private $films = 
'
	{
	  "films": [
	    {
	      "id": "1",
	      "title": "Zero Dark Thirty",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "2",
	      "title": "Amour",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "3",
	      "title": "Beasts of the Southern Wild",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "4",
	      "title": "Argo",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "5",
	      "title": "Django Unchained",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "6",
	      "title": "Les Miserables",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "7",
	      "title": "Life of Pi",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "8",
	      "title": "Lincoln",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "9",
	      "title": "Silver Linings Playbook",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "10",
	      "title": "The Master",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "11",
	      "title": "Flight",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "12",
	      "title": "The Impossible",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "13",
	      "title": "The Sessions",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "14",
	      "title": "Moonrise Kingdom",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "15",
	      "title": "Brave",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "16",
	      "title": "Frankenweenie",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "17",
	      "title": "ParaNorman",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "18",
	      "title": "Wreck-It Ralph",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "19",
	      "title": "Anna Karenina",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "20",
	      "title": "Skyfall",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "21",
	      "title": "The Hobbit",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "22",
	      "title": "Mirror Mirror",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "23",
	      "title": "Snow White and the Huntsman",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "24",
	      "title": "Hitchcock",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "25",
	      "title": "Ted",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "26",
	      "title": "The Avengers",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "27",
	      "title": "Prometheus",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "28",
	      "title": "Best Exotic Marigold Hotel",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "29",
	      "title": "The Dark Knight Rises",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "30",
	      "title": "Cloud Atlas",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "31",
	      "title": "Salmon Fishing in the Yemen",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "32",
	      "title": "Promised Land",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "33",
	      "title": "Rust and Bone",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "34",
	      "title": "Perks of Being a Wallflower",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "35",
	      "title": "Looper",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "36",
	      "title": "The Paperboy",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "37",
	      "title": "Intouchables",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "38",
	      "title": "Joyful Noise",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "39",
	      "title": "Rise of the Guardians",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "40",
	      "title": "Magic Mike",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "41",
	      "title": "Hunger Games",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "42",
	      "title": "Quartet",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "43",
	      "title": "Paul Williams Still Alive",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "44",
	      "title": "Bernie",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "45",
	      "title": "Men In Black III",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "46",
	      "title": "Act of Valor",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "47",
	      "title": "Savages",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "48",
	      "title": "21 Jump Street",
	      "year": "2012",
	      "imdb": "0083658"
	    },
	    {
	      "id": "49",
	      "title": "American Hustle",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "50",
	      "title": "Captain Phillips",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "51",
	      "title": "Dallas Buyers Club",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "52",
	      "title": "Gravity",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "53",
	      "title": "Her",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "54",
	      "title": "Nebraska",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "55",
	      "title": "Philomena",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "56",
	      "title": "12 Years a Slave",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "57",
	      "title": "The Wolf of Wall Street",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "58",
	      "title": "Blue Jasmine",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "59",
	      "title": "August: Osage County",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "60",
	      "title": "The Croods",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "61",
	      "title": "Despicable Me 2",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "62",
	      "title": "Ernest & Celestine",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "63",
	      "title": "Frozen",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "64",
	      "title": "The Wind Rises",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "65",
	      "title": "The Grandmaster",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "66",
	      "title": "Inside Llewyn Davis",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "67",
	      "title": "Prisoners",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "68",
	      "title": "The Great Gatsby",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "69",
	      "title": "The Invisible Woman",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "70",
	      "title": "The Act of Killing",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "71",
	      "title": "Cutie and the Boxer",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "72",
	      "title": "Dirty Wars",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "73",
	      "title": "The Square",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "74",
	      "title": "20 Feet from Stardom",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "75",
	      "title": "CaveDigger",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "76",
	      "title": "Facing Fear",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "77",
	      "title": "Karama Has No Walls",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "78",
	      "title": "The Lady in Number 6",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "79",
	      "title": "Prison Terminal",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "80",
	      "title": "The Broken Circle Breakdown",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "81",
	      "title": "The Great Beauty",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "82",
	      "title": "The Hunt",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "83",
	      "title": "The Missing Picture",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "84",
	      "title": "Omar",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "85",
	      "title": "Jackass Presents: Bad Grandpa",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "86",
	      "title": "The Lone Ranger",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "87",
	      "title": "The Book Thief",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "88",
	      "title": "Saving Mr. Banks",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "89",
	      "title": "Mandela: Long Walk To Freedom",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "90",
	      "title": "Feral",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "91",
	      "title": "Get a Horse!",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "92",
	      "title": "Mr. Hublot",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "93",
	      "title": "Possessions",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "94",
	      "title": "Room on the Broom",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "95",
	      "title": "Aquel No Era Yo",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "96",
	      "title": "Avant Que De Tout Perdre",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "97",
	      "title": "Helium",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "98",
	      "title": "Pitaako Mun Kaikki Hoitaa?",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "99",
	      "title": "The Voorman Problem",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "100",
	      "title": "All Is Lost",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "101",
	      "title": "The Hobbit: The Desolation of Smaug",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "102",
	      "title": "Lone Survivor",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "103",
	      "title": "Iron Man 3",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "104",
	      "title": "Star Trek Into Darkness",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "105",
	      "title": "Before Midnight",
	      "year": "2013",
	      "imdb": "0083658"
	    },
	    {
	      "id": "106",
	      "title": "Unbroken",
	      "year": "2014",
	      "imdb": "1809398"
	    },
	    {
	      "id": "107",
	      "title": "Selma",
	      "year": "2014",
	      "imdb": "1020072"
	    },
	    {
	      "id": "108",
	      "title": "Boyhood",
	      "year": "2014",
	      "imdb": "1065073"
	    },
	    {
	      "id": "109",
	      "title": "The Imitation Game",
	      "year": "2014",
	      "imdb": "2084970"
	    },
	    {
	      "id": "110",
	      "title": "The Theory Of Everything",
	      "year": "2014",
	      "imdb": "2980516"
	    },
	    {
	      "id": "111",
	      "title": "Birdman",
	      "year": "2014",
	      "imdb": "2562232"
	    },
	    {
	      "id": "112",
	      "title": "The Grand Budapest Hotel",
	      "year": "2014",
	      "imdb": "2278388"
	    },
	    {
	      "id": "113",
	      "title": "Whiplash",
	      "year": "2014",
	      "imdb": "2582802"
	    },
	    {
	      "id": "114",
	      "title": "Gone Girl",
	      "year": "2014",
	      "imdb": "2267998"
	    },
	    {
	      "id": "115",
	      "title": "Foxcatcher",
	      "year": "2014",
	      "imdb": "1100089"
	    },
	    {
	      "id": "116",
	      "title": "American Sniper",
	      "year": "2014",
	      "imdb": "2179136"
	    },
	    {
	      "id": "117",
	      "title": "Mr. Turner",
	      "year": "2014",
	      "imdb": "2473794"
	    },
	    {
	      "id": "118",
	      "title": "Into The Woods",
	      "year": "2014",
	      "imdb": "2180411"
	    },
	    {
	      "id": "119",
	      "title": "A Most Violent Year",
	      "year": "2014",
	      "imdb": "2937898"
	    },
	    {
	      "id": "120",
	      "title": "Interstellar",
	      "year": "2014",
	      "imdb": "0816692"
	    },
	    {
	      "id": "122",
	      "title": "The Interview",
	      "year": "2014",
	      "imdb": "2788710"
	    },
	    {
	      "id": "123",
	      "title": "Life Itself (D)",
	      "year": "2014",
	      "imdb": "2382298"
	    },
	    {
	      "id": "124",
	      "title": "The LEGO Movie (A)",
	      "year": "2014",
	      "imdb": "1490017"
	    },
	    {
	      "id": "125",
	      "title": "Guardians Of The Galaxy",
	      "year": "2014",
	      "imdb": "2015381"
	    },
	    {
	      "id": "126",
	      "title": "X-Men: Days of Future Past",
	      "year": "2014",
	      "imdb": "1877832"
	    },
	    {
	      "id": "149",
	      "title": "Wild",
	      "year": "2014",
	      "imdb": "2305051"
	    },
	    {
	      "id": "150",
	      "title": "Snowpiercer",
	      "year": "2014",
	      "imdb": "1706620"
	    },
	    {
	      "id": "151",
	      "title": "Big Eyes",
	      "year": "2014",
	      "imdb": "1126590"
	    },
	    {
	      "id": "152",
	      "title": "The Hobbit: The Battle of the Five Armies",
	      "year": "2014",
	      "imdb": "2310332"
	    },
	    {
	      "id": "153",
	      "title": "Inherent Vice",
	      "year": "2014",
	      "imdb": "1791528"
	    },
	    {
	      "id": "154",
	      "title": "Dawn of the Planet of the Apes",
	      "year": "2014",
	      "imdb": "2103281"
	    },
	    {
	      "id": "163",
	      "title": "Teenage Mutant Ninja Turtles",
	      "year": "2014",
	      "imdb": "1291150"
	    },
	    {
	      "id": "162",
	      "title": "PK (F)",
	      "year": "2014",
	      "imdb": "2338151"
	    },
	    {
	      "id": "161",
	      "title": "The Hunger Games: Mockingjay Part 1",
	      "year": "2014",
	      "imdb": "1951265"
	    },
	    {
	      "id": "160",
	      "title": "The Equalizer",
	      "year": "2014",
	      "imdb": "0455944"
	    },
	    {
	      "id": "159",
	      "title": "Divergent",
	      "year": "2014",
	      "imdb": "1840309"
	    },
	    {
	      "id": "158",
	      "title": "The Maze Runner",
	      "year": "2014",
	      "imdb": "1790864"
	    },
	    {
	      "id": "157",
	      "title": "Night at the Museum: Secret of the Tomb",
	      "year": "2014",
	      "imdb": "2692250"
	    },
	    {
	      "id": "156",
	      "title": "Annie",
	      "year": "2014",
	      "imdb": "1823664"
	    },
	    {
	      "id": "155",
	      "title": "Exodus: Gods and Kings",
	      "year": "2014",
	      "imdb": "1528100"
	    },
	    {
	      "id": "164",
	      "title": "The Guest",
	      "year": "2014",
	      "imdb": "2980592"
	    },
	    {
	      "id": "165",
	      "title": "The Gambler",
	      "year": "2014",
	      "imdb": "2039393"
	    },
	    {
	      "id": "166",
	      "title": "Dumb and Dumber To",
	      "year": "2014",
	      "imdb": "2096672"
	    },
	    {
	      "id": "167",
	      "title": "Big Hero 6 (A)",
	      "year": "2014",
	      "imdb": "2245084"
	    },
	    {
	      "id": "168",
	      "title": "The Drop",
	      "year": "2014",
	      "imdb": "1600196"
	    },
	    {
	      "id": "169",
	      "title": "Fury",
	      "year": "2014",
	      "imdb": "2713180"
	    },
	    {
	      "id": "170",
	      "title": "Predestination",
	      "year": "2014",
	      "imdb": "2397535"
	    },
	    {
	      "id": "171",
	      "title": "Nightcrawler",
	      "year": "2014",
	      "imdb": "2872718"
	    },
	    {
	      "id": "172",
	      "title": "Horrible Bosses 2",
	      "year": "2014",
	      "imdb": "2170439"
	    },
	    {
	      "id": "173",
	      "title": "A Little Chaos",
	      "year": "2014",
	      "imdb": "2639254"
	    },
	    {
	      "id": "174",
	      "title": "This is Where I Leave You",
	      "year": "2014",
	      "imdb": "1371150"
	    },
	    {
	      "id": "175",
	      "title": "Penguins of Madagascar (A)",
	      "year": "2014",
	      "imdb": "1911658"
	    },
	    {
	      "id": "176",
	      "title": "Maleficent",
	      "year": "2014",
	      "imdb": "1587310"
	    },
	    {
	      "id": "177",
	      "title": "Top Five",
	      "year": "2014",
	      "imdb": "2784678"
	    },
	    {
	      "id": "178",
	      "title": "The Expendables 3",
	      "year": "2014",
	      "imdb": "2333784"
	    },
	    {
	      "id": "179",
	      "title": "If I Stay",
	      "year": "2014",
	      "imdb": "1355630"
	    },
	    {
	      "id": "180",
	      "title": "Tusk",
	      "year": "2014",
	      "imdb": "3099498"
	    },
	    {
	      "id": "181",
	      "title": "The Signal",
	      "year": "2014",
	      "imdb": "2910814"
	    },
	    {
	      "id": "182",
	      "title": "Edge of Tomorrow",
	      "year": "2014",
	      "imdb": "1631867"
	    },
	    {
	      "id": "183",
	      "title": "Paddington",
	      "year": "2014",
	      "imdb": "1109624"
	    },
	    {
	      "id": "184",
	      "title": "The Boxtrolls (A)",
	      "year": "2014",
	      "imdb": "0787474"
	    },
	    {
	      "id": "185",
	      "title": "The Fault In Our Stars",
	      "year": "2014",
	      "imdb": "2582846"
	    },
	    {
	      "id": "186",
	      "title": "How To Train Your Dragon 2 (A)",
	      "year": "2014",
	      "imdb": "1646971"
	    },
	    {
	      "id": "187",
	      "title": "The Book Of Life (A)",
	      "year": "2014",
	      "imdb": "2262227"
	    },
	    {
	      "id": "188",
	      "title": "Cake",
	      "year": "2014",
	      "imdb": "3442006"
	    },
	    {
	      "id": "189",
	      "title": "St. Vincent",
	      "year": "2014",
	      "imdb": "2170593"
	    },
	    {
	      "id": "190",
	      "title": "Pride",
	      "year": "2014",
	      "imdb": "3169706"
	    },
	    {
	      "id": "191",
	      "title": "Maps To The Stars",
	      "year": "2014",
	      "imdb": "2172584"
	    },
	    {
	      "id": "192",
	      "title": "The Hundred Foot Journey",
	      "year": "2014",
	      "imdb": "2980648"
	    },
	    {
	      "id": "193",
	      "title": "Ida (F)",
	      "year": "2014",
	      "imdb": "2718492"
	    },
	    {
	      "id": "194",
	      "title": "Force Majeure (F)",
	      "year": "2014",
	      "imdb": "3630276"
	    },
	    {
	      "id": "195",
	      "title": "Gett: The Trial of Viviane Amsalem (F)",
	      "year": "2014",
	      "imdb": "3062880"
	    },
	    {
	      "id": "196",
	      "title": "Tangerines (F)",
	      "year": "2014",
	      "imdb": "2991224"
	    },
	    {
	      "id": "197",
	      "title": "Leviathan (F)",
	      "year": "2014",
	      "imdb": "2802154"
	    },
	    {
	      "id": "198",
	      "title": "The Judge",
	      "year": "2014",
	      "imdb": "1872194"
	    },
	    {
	      "id": "199",
	      "title": "Noah",
	      "year": "2014",
	      "imdb": "1959490"
	    },
	    {
	      "id": "200",
	      "title": "Still Alice",
	      "year": "2014",
	      "imdb": "3316960"
	    },
	    {
	      "id": "201",
	      "title": "The Homesman",
	      "year": "2014",
	      "imdb": "2398231"
	    },
	    {
	      "id": "202",
	      "title": "Dear White People",
	      "year": "2014",
	      "imdb": "2235108"
	    },
	    {
	      "id": "203",
	      "title": "Godzilla",
	      "year": "2014",
	      "imdb": "0831387"
	    },
	    {
	      "id": "204",
	      "title": "Transformers: Age of Extinction",
	      "year": "2014",
	      "imdb": "2109248"
	    },
	    {
	      "id": "205",
	      "title": "Under The Skin",
	      "year": "2014",
	      "imdb": "1441395"
	    },
	    {
	      "id": "206",
	      "title": "Begin Again",
	      "year": "2014",
	      "imdb": "1980929"
	    },
	    {
	      "id": "207",
	      "title": "The Tale of The Princess Kaguya (A)",
	      "year": "2014",
	      "imdb": "2576852"
	    },
	    {
	      "id": "208",
	      "title": "Wild Tales (F)",
	      "year": "2014",
	      "imdb": "3011894"
	    },
	    {
	      "id": "209",
	      "title": "Timbuktu (F)",
	      "year": "2014",
	      "imdb": "3409392"
	    },
	    {
	      "id": "210",
	      "title": "The Liberator (F)",
	      "year": "2014",
	      "imdb": "2387513"
	    },
	    {
	      "id": "211",
	      "title": "Rosewater",
	      "year": "2014",
	      "imdb": "2752688"
	    },
	    {
	      "id": "212",
	      "title": "Love Is Strange",
	      "year": "2014",
	      "imdb": "2639344"
	    },
	    {
	      "id": "213",
	      "title": "Get On Up",
	      "year": "2014",
	      "imdb": "2473602"
	    },
	    {
	      "id": "214",
	      "title": "Calvary",
	      "year": "2014",
	      "imdb": "2234003"
	    },
	    {
	      "id": "215",
	      "title": "Citizenfour (D)",
	      "year": "2014",
	      "imdb": "4044364"
	    },
	    {
	      "id": "216",
	      "title": "Belle",
	      "year": "2014",
	      "imdb": "2404181"
	    },
	    {
	      "id": "217",
	      "title": "Last Days In Vietnam (D)",
	      "year": "2014",
	      "imdb": "3279124"
	    },
	    {
	      "id": "218",
	      "title": "The Overnighters (D)",
	      "year": "2014",
	      "imdb": "3263996"
	    },
	    {
	      "id": "219",
	      "title": "Virunga (D)",
	      "year": "2014",
	      "imdb": "3455224"
	    },
	    {
	      "id": "220",
	      "title": "Two Days One Night (F)",
	      "year": "2014",
	      "imdb": "2737050"
	    },
	    {
	      "id": "221",
	      "title": "The Babadook",
	      "year": "2014",
	      "imdb": "2321549"
	    },
	    {
	      "id": "222",
	      "title": "Captain America: The Winter Soldier",
	      "year": "2014",
	      "imdb": "1843866"
	    },
	    {
	      "id": "223",
	      "title": "Lucy",
	      "year": "2014",
	      "imdb": "2872732"
	    },
	    {
	      "id": "224",
	      "title": "22 Jump Street",
	      "year": "2014",
	      "imdb": "2294449"
	    },
	    {
	      "id": "225",
	      "title": "Chef",
	      "year": "2014",
	      "imdb": "2883512"
	    },
	    {
	      "id": "226",
	      "title": "Obvious Child",
	      "year": "2014",
	      "imdb": "2910274"
	    },
	    {
	      "id": "227",
	      "title": "The Skeleton Twins",
	      "year": "2014",
	      "imdb": "1571249"
	    },
	    {
	      "id": "228",
	      "title": "Glen Campbell: Ill Be Me (D)",
	      "year": "2014",
	      "imdb": "2049586"
	    },
	    {
	      "id": "229",
	      "title": "Jodorowskys Dune (D)",
	      "year": "2014",
	      "imdb": "1935156"
	    },
	    {
	      "id": "230",
	      "title": "The Case Against 8 (D)",
	      "year": "2014",
	      "imdb": "2107850"
	    },
	    {
	      "id": "234",
	      "title": "The Hateful Eight",
	      "year": "2015",
	      "imdb": "3460252"
	    },
	    {
	      "id": "233",
	      "title": "Creed",
	      "year": "2015",
	      "imdb": "3076658"
	    },
	    {
	      "id": "235",
	      "title": "The Revenant",
	      "year": "2015",
	      "imdb": "1663202"
	    },
	    {
	      "id": "236",
	      "title": "Bridge of Spies",
	      "year": "2015",
	      "imdb": "3682448"
	    },
	    {
	      "id": "237",
	      "title": "Carol",
	      "year": "2015",
	      "imdb": "2402927"
	    },
	    {
	      "id": "238",
	      "title": "Brooklyn",
	      "year": "2015",
	      "imdb": "2381111"
	    },
	    {
	      "id": "239",
	      "title": "Avengers Age of Ultron",
	      "year": "2015",
	      "imdb": "3291874"
	    },
	    {
	      "id": "240",
	      "title": "Ant-Man",
	      "year": "2015",
	      "imdb": "478970"
	    },
	    {
	      "id": "241",
	      "title": "Mad Max: Fury Road",
	      "year": "2015",
	      "imdb": "1392190"
	    },
	    {
	      "id": "242",
	      "title": "Spotlight",
	      "year": "2015",
	      "imdb": "1895587"
	    },
	    {
	      "id": "243",
	      "title": "Room",
	      "year": "2015",
	      "imdb": "3170832"
	    },
	    {
	      "id": "244",
	      "title": "The Big Short",
	      "year": "2015",
	      "imdb": "1596363"
	    },
	    {
	      "id": "245",
	      "title": "The Martian",
	      "year": "2015",
	      "imdb": "3659388"
	    },
	    {
	      "id": "246",
	      "title": "Spy",
	      "year": "2015",
	      "imdb": "3079380"
	    },
	    {
	      "id": "247",
	      "title": "Joy",
	      "year": "2015",
	      "imdb": "2446980"
	    },
	    {
	      "id": "248",
	      "title": "Trainwreck",
	      "year": "2015",
	      "imdb": "3152624"
	    },
	    {
	      "id": "249",
	      "title": "Sicario",
	      "year": "2015",
	      "imdb": "3397884"
	    },
	    {
	      "id": "250",
	      "title": "Star Wars",
	      "year": "2015",
	      "imdb": "251413"
	    },
	    {
	      "id": "251",
	      "title": "Trumbo",
	      "year": "2015",
	      "imdb": "3203606"
	    },
	    {
	      "id": "252",
	      "title": "Black Mass",
	      "year": "2015",
	      "imdb": "1355683"
	    },
	    {
	      "id": "253",
	      "title": "Steve Jobs",
	      "year": "2015",
	      "imdb": "2080374"
	    },
	    {
	      "id": "254",
	      "title": "The Danish Girl",
	      "year": "2015",
	      "imdb": "810819"
	    },
	    {
	      "id": "255",
	      "title": "45 Years",
	      "year": "2015",
	      "imdb": "3544082"
	    },
	    {
	      "id": "256",
	      "title": "Love and Mercy",
	      "year": "2015",
	      "imdb": "0903657"
	    },
	    {
	      "id": "257",
	      "title": "99 Homes",
	      "year": "2015",
	      "imdb": "2891174"
	    },
	    {
	      "id": "258",
	      "title": "Straight Outta Compton",
	      "year": "2015",
	      "imdb": "1398426"
	    },
	    {
	      "id": "259",
	      "title": "Ex Machina",
	      "year": "2015",
	      "imdb": "470752"
	    },
	    {
	      "id": "260",
	      "title": "Minions (A)",
	      "year": "2015",
	      "imdb": "2293640"
	    },
	    {
	      "id": "261",
	      "title": "Inside Out (A)",
	      "year": "2015",
	      "imdb": "2096673"
	    },
	    {
	      "id": "262",
	      "title": "Anomalisa (A)",
	      "year": "2015",
	      "imdb": "2401878"
	    },
	    {
	      "id": "263",
	      "title": "Good Dinosaur (A)",
	      "year": "2015",
	      "imdb": "1979388"
	    },
	    {
	      "id": "264",
	      "title": "Peanuts (A)",
	      "year": "2015",
	      "imdb": "472482"
	    },
	    {
	      "id": "265",
	      "title": "Shaun The Sheep (A)",
	      "year": "2015",
	      "imdb": "983983"
	    },
	    {
	      "id": "266",
	      "title": "Furious Seven",
	      "year": "2015",
	      "imdb": "2820852"
	    },
	    {
	      "id": "267",
	      "title": "Jurassic World",
	      "year": "2015",
	      "imdb": "369610"
	    },
	    {
	      "id": "268",
	      "title": "Mission Impossible: Rogue Nation",
	      "year": "2015",
	      "imdb": "2381249"
	    },
	    {
	      "id": "269",
	      "title": "Spectre",
	      "year": "2015",
	      "imdb": "2379713"
	    },
	    {
	      "id": "270",
	      "title": "Hunger Games: Mockingjay",
	      "year": "2015",
	      "imdb": "1951265"
	    },
	    {
	      "id": "271",
	      "title": "Sisters",
	      "year": "2015",
	      "imdb": "70698"
	    },
	    {
	      "id": "272",
	      "title": "The Intern",
	      "year": "2015",
	      "imdb": "2361509"
	    },
	    {
	      "id": "273",
	      "title": "Grandma",
	      "year": "2015",
	      "imdb": "4270516"
	    },
	    {
	      "id": "274",
	      "title": "It Follows",
	      "year": "2015",
	      "imdb": "3235888"
	    },
	    {
	      "id": "275",
	      "title": "Goodnight Mommy (F)",
	      "year": "2015",
	      "imdb": "3086442"
	    },
	    {
	      "id": "276",
	      "title": "Mustang (F)",
	      "year": "2015",
	      "imdb": "3966404"
	    },
	    {
	      "id": "277",
	      "title": "The Club (F)",
	      "year": "2015",
	      "imdb": "4375438"
	    },
	    {
	      "id": "278",
	      "title": "The Brand New Testament (F)",
	      "year": "2015",
	      "imdb": "3792960"
	    },
	    {
	      "id": "279",
	      "title": "Wild Tales (F)",
	      "year": "2015",
	      "imdb": "3011894"
	    },
	    {
	      "id": "280",
	      "title": "The Assassin (F)",
	      "year": "2015",
	      "imdb": "3508840"
	    },
	    {
	      "id": "281",
	      "title": "Theeb (F)",
	      "year": "2015",
	      "imdb": "3170902"
	    },
	    {
	      "id": "282",
	      "title": "Timbuktu (F)",
	      "year": "2015",
	      "imdb": "3409392"
	    },
	    {
	      "id": "283",
	      "title": "The Fencer (F)",
	      "year": "2015",
	      "imdb": "2534634"
	    },
	    {
	      "id": "284",
	      "title": "The Second Mother (F)",
	      "year": "2015",
	      "imdb": "3742378"
	    },
	    {
	      "id": "285",
	      "title": "Son of Saul (F)",
	      "year": "2015",
	      "imdb": "3808342"
	    },
	    {
	      "id": "286",
	      "title": "Amy (D)",
	      "year": "2015",
	      "imdb": "2870648"
	    },
	    {
	      "id": "287",
	      "title": "Cartel Land (D)",
	      "year": "2015",
	      "imdb": "4126304"
	    },
	    {
	      "id": "288",
	      "title": "Going Clear (D)",
	      "year": "2015",
	      "imdb": "4257858"
	    },
	    {
	      "id": "289",
	      "title": "He Named Me Malala (D)",
	      "year": "2015",
	      "imdb": "3065132"
	    },
	    {
	      "id": "290",
	      "title": "The Look Of Silence (D)",
	      "year": "2015",
	      "imdb": "3521134"
	    },
	    {
	      "id": "291",
	      "title": "Where To Invade Next (D)",
	      "year": "2015",
	      "imdb": "4897822"
	    },
	    {
	      "id": "292",
	      "title": "A Syrian Love Story (D)",
	      "year": "2015",
	      "imdb": "4684410"
	    },
	    {
	      "id": "293",
	      "title": "The Wolfpack (D)",
	      "year": "2015",
	      "imdb": "2415458"
	    },
	    {
	      "id": "294",
	      "title": "Listen To Me, Marlon (D)",
	      "year": "2015",
	      "imdb": "1234567"
	    },
	    {
	      "id": "295",
	      "title": "Sherpa (D)",
	      "year": "2015",
	      "imdb": "3746250"
	    },
	    {
	      "id": "296",
	      "title": "50 Shades of Grey",
	      "year": "2015",
	      "imdb": "2689868"
	    },
	    {
	      "id": "297",
	      "title": "The Hunting Ground",
	      "year": "2015",
	      "imdb": "4185572"
	    },
	    {
	      "id": "298",
	      "title": "Youth",
	      "year": "2015",
	      "imdb": "3312830"
	    },
	    {
	      "id": "299",
	      "title": "Cinderella",
	      "year": "2015",
	      "imdb": "42332"
	    },
	    {
	      "id": "300",
	      "title": "The Walk",
	      "year": "2015",
	      "imdb": "3488710"
	    },
	    {
	      "id": "301",
	      "title": "Concussion",
	      "year": "2015",
	      "imdb": "2296697"
	    },
	    {
	      "id": "302",
	      "title": "Danny Collins",
	      "year": "2015",
	      "imdb": "1772288"
	    },
	    {
	      "id": "303",
	      "title": "Infinitely Polar Bear",
	      "year": "2015",
	      "imdb": "1969062"
	    },
	    {
	      "id": "304",
	      "title": "The Lady In The Van",
	      "year": "2015",
	      "imdb": "3722070"
	    },
	    {
	      "id": "305",
	      "title": "Beasts of No Nation",
	      "year": "2015",
	      "imdb": "1365050"
	    },
	    {
	      "id": "306",
	      "title": "Clouds of Sils Maria",
	      "year": "2015",
	      "imdb": "2452254"
	    },
	    {
	      "id": "307",
	      "title": "Diary of a Teenage Girl",
	      "year": "2015",
	      "imdb": "3172532"
	    },
	    {
	      "id": "308",
	      "title": "The End of the Tour",
	      "year": "2015",
	      "imdb": "3416744"
	    },
	    {
	      "id": "309",
	      "title": "Far From The Madding Crowd",
	      "year": "2015",
	      "imdb": "2935476"
	    },
	    {
	      "id": "310",
	      "title": "Hello, My Name Is Doris",
	      "year": "2015",
	      "imdb": "1234567"
	    },
	    {
	      "id": "311",
	      "title": "I Will See You In My Dreams",
	      "year": "2015",
	      "imdb": "3236120"
	    },
	    {
	      "id": "312",
	      "title": "I Smile Back",
	      "year": "2015",
	      "imdb": "3640682"
	    },
	    {
	      "id": "313",
	      "title": "James White",
	      "year": "2015",
	      "imdb": "4288636"
	    },
	    {
	      "id": "314",
	      "title": "Krisha",
	      "year": "2015",
	      "imdb": "4266638"
	    },
	    {
	      "id": "315",
	      "title": "Macbeth",
	      "year": "2015",
	      "imdb": "2884018"
	    },
	    {
	      "id": "316",
	      "title": "Mistress America",
	      "year": "2015",
	      "imdb": "2872462"
	    },
	    {
	      "id": "317",
	      "title": "Mr. Holmes",
	      "year": "2015",
	      "imdb": "3168230"
	    },
	    {
	      "id": "318",
	      "title": "Southpaw",
	      "year": "2015",
	      "imdb": "1798684"
	    },
	    {
	      "id": "319",
	      "title": "The Witch",
	      "year": "2015",
	      "imdb": "4263482"
	    },
	    {
	      "id": "320",
	      "title": "The Lobster",
	      "year": "2015",
	      "imdb": "3464902"
	    },
	    {
	      "id": "321",
	      "title": "Second Coming",
	      "year": "2015",
	      "imdb": "932672"
	    },
	    {
	      "id": "322",
	      "title": "The Survivalist",
	      "year": "2015",
	      "imdb": "2580382"
	    },
	    {
	      "id": "323",
	      "title": "Man From U.N.C.L.E.",
	      "year": "2015",
	      "imdb": "1638355"
	    },
	    {
	      "id": "324",
	      "title": "In The Heart Of The Sea",
	      "year": "2015",
	      "imdb": "1234567"
	    },
	    {
	      "id": "325",
	      "title": "Me and Earl and the Dying Girl",
	      "year": "2015",
	      "imdb": "0083658"
	    },
	    {
	      "id": "326",
	      "title": "Suffragette",
	      "year": "2015",
	      "imdb": "0083658"
	    },
	    {
	      "id": "424",
	      "title": "A Man Called Ove",
	      "year": "2016",
	      "imdb": "4080728"
	    },
	    {
	      "id": "425",
	      "title": "Hail, Caesar",
	      "year": "2016",
	      "imdb": "1234567"
	    },
	    {
	      "id": "329",
	      "title": "Rogue One",
	      "year": "2016",
	      "imdb": "3748528"
	    },
	    {
	      "id": "330",
	      "title": "La La Land",
	      "year": "2016",
	      "imdb": "3783958"
	    },
	    {
	      "id": "331",
	      "title": "Moonlight",
	      "year": "2016",
	      "imdb": "4975722"
	    },
	    {
	      "id": "332",
	      "title": "Manchester by the Sea",
	      "year": "2016",
	      "imdb": "4034228"
	    },
	    {
	      "id": "333",
	      "title": "Hacksaw Ridge",
	      "year": "2016",
	      "imdb": "2119532"
	    },
	    {
	      "id": "334",
	      "title": "Hell or High Water",
	      "year": "2016",
	      "imdb": "2582782"
	    },
	    {
	      "id": "335",
	      "title": "Lion",
	      "year": "2016",
	      "imdb": "3741834"
	    },
	    {
	      "id": "336",
	      "title": "Arrival",
	      "year": "2016",
	      "imdb": "2543164"
	    },
	    {
	      "id": "337",
	      "title": "20th Century Women",
	      "year": "2016",
	      "imdb": "4385888"
	    },
	    {
	      "id": "338",
	      "title": "Deadpool",
	      "year": "2016",
	      "imdb": "1431045"
	    },
	    {
	      "id": "339",
	      "title": "Florence Foster Jenkins",
	      "year": "2016",
	      "imdb": "4136084"
	    },
	    {
	      "id": "340",
	      "title": "Sing Street",
	      "year": "2016",
	      "imdb": "3544112"
	    },
	    {
	      "id": "341",
	      "title": "Loving",
	      "year": "2016",
	      "imdb": "4669986"
	    },
	    {
	      "id": "342",
	      "title": "Captain Fantastic",
	      "year": "2016",
	      "imdb": "3553976"
	    },
	    {
	      "id": "343",
	      "title": "Fences",
	      "year": "2016",
	      "imdb": "2671706"
	    },
	    {
	      "id": "344",
	      "title": "Miss Sloane",
	      "year": "2016",
	      "imdb": "4540710"
	    },
	    {
	      "id": "345",
	      "title": "Elle (F)",
	      "year": "2016",
	      "imdb": "3716530"
	    },
	    {
	      "id": "346",
	      "title": "Jackie",
	      "year": "2016",
	      "imdb": "1619029"
	    },
	    {
	      "id": "347",
	      "title": "The Lobster (2015)",
	      "year": "2016",
	      "imdb": "3464902"
	    },
	    {
	      "id": "348",
	      "title": "The Witch",
	      "year": "2016",
	      "imdb": "4263482"
	    },
	    {
	      "id": "349",
	      "title": "War Dogs",
	      "year": "2016",
	      "imdb": "2005151"
	    },
	    {
	      "id": "350",
	      "title": "Rules Dont Apply",
	      "year": "2016",
	      "imdb": "1974420"
	    },
	    {
	      "id": "351",
	      "title": "The Edge of Seventeen",
	      "year": "2016",
	      "imdb": "1878870"
	    },
	    {
	      "id": "352",
	      "title": "Nocturnal Animals",
	      "year": "2016",
	      "imdb": "4550098"
	    },
	    {
	      "id": "353",
	      "title": "Hidden Figures",
	      "year": "2016",
	      "imdb": "4846340"
	    },
	    {
	      "id": "354",
	      "title": "Trolls (A)",
	      "year": "2016",
	      "imdb": "1679335"
	    },
	    {
	      "id": "355",
	      "title": "Moana (A)",
	      "year": "2016",
	      "imdb": "3521164"
	    },
	    {
	      "id": "356",
	      "title": "Sing (A)",
	      "year": "2016",
	      "imdb": "3470600"
	    },
	    {
	      "id": "357",
	      "title": "Gold",
	      "year": "2016",
	      "imdb": "1800302"
	    },
	    {
	      "id": "358",
	      "title": "Kubo and the Two Strings (A)",
	      "year": "2016",
	      "imdb": "4302938"
	    },
	    {
	      "id": "359",
	      "title": "My Life as a Zucchini (A)",
	      "year": "2016",
	      "imdb": "2321405"
	    },
	    {
	      "id": "360",
	      "title": "Zootopia (A)",
	      "year": "2016",
	      "imdb": "2948356"
	    },
	    {
	      "id": "361",
	      "title": "Divines (F)",
	      "year": "2016",
	      "imdb": "4730986"
	    },
	    {
	      "id": "362",
	      "title": "Neruda (F)",
	      "year": "2016",
	      "imdb": "4698584"
	    },
	    {
	      "id": "363",
	      "title": "The Salesman (F)",
	      "year": "2016",
	      "imdb": "5186714"
	    },
	    {
	      "id": "364",
	      "title": "Toni Erdmann (F)",
	      "year": "2016",
	      "imdb": "4048272"
	    },
	    {
	      "id": "365",
	      "title": "Sully",
	      "year": "2016",
	      "imdb": "3263904"
	    },
	    {
	      "id": "366",
	      "title": "13th (D)",
	      "year": "2016",
	      "imdb": "5895028"
	    },
	    {
	      "id": "367",
	      "title": "The Jungle Book",
	      "year": "2016",
	      "imdb": "3040964"
	    },
	    {
	      "id": "368",
	      "title": "A Monster Calls",
	      "year": "2016",
	      "imdb": "3416532"
	    },
	    {
	      "id": "369",
	      "title": "Silence",
	      "year": "2016",
	      "imdb": "0490215"
	    },
	    {
	      "id": "370",
	      "title": "American Honey",
	      "year": "2016",
	      "imdb": "3721936"
	    },
	    {
	      "id": "371",
	      "title": "The Girl on the Train",
	      "year": "2016",
	      "imdb": "3631112"
	    },
	    {
	      "id": "372",
	      "title": "Eye in the Sky",
	      "year": "2016",
	      "imdb": "2057392"
	    },
	    {
	      "id": "373",
	      "title": "A Bigger Splash",
	      "year": "2016",
	      "imdb": "2056771"
	    },
	    {
	      "id": "374",
	      "title": "Maggies Plan (F)",
	      "year": "2016",
	      "imdb": "3471098"
	    },
	    {
	      "id": "375",
	      "title": "Finding Dory (A)",
	      "year": "2016",
	      "imdb": "2277860"
	    },
	    {
	      "id": "376",
	      "title": "The Red Turtle (A)",
	      "year": "2016",
	      "imdb": "3666024"
	    },
	    {
	      "id": "377",
	      "title": "Miss Hokusai (A)",
	      "year": "2016",
	      "imdb": "3689910"
	    },
	    {
	      "id": "378",
	      "title": "Long Way North (A)",
	      "year": "2016",
	      "imdb": "2262345"
	    },
	    {
	      "id": "379",
	      "title": "The Little Prince (A)",
	      "year": "2016",
	      "imdb": "1754656"
	    },
	    {
	      "id": "380",
	      "title": "The Secret Life of Pets (A)",
	      "year": "2016",
	      "imdb": "2709768"
	    },
	    {
	      "id": "381",
	      "title": "Storks (A)",
	      "year": "2016",
	      "imdb": "4624424"
	    },
	    {
	      "id": "382",
	      "title": "WienerDog (F)",
	      "year": "2016",
	      "imdb": "4144190"
	    },
	    {
	      "id": "383",
	      "title": "Life, Animated (D)",
	      "year": "2016",
	      "imdb": "1234567"
	    },
	    {
	      "id": "384",
	      "title": "O.J.: Made in America (D)",
	      "year": "2016",
	      "imdb": "5275892"
	    },
	    {
	      "id": "385",
	      "title": "Jim: The James Foley Story (D)",
	      "year": "2016",
	      "imdb": "5278466"
	    },
	    {
	      "id": "386",
	      "title": "The Eagle Huntress (D)",
	      "year": "2016",
	      "imdb": "3882074"
	    },
	    {
	      "id": "387",
	      "title": "Cameraperson (D)",
	      "year": "2016",
	      "imdb": "5375040"
	    },
	    {
	      "id": "388",
	      "title": "Gleason (D)",
	      "year": "2016",
	      "imdb": "4632316"
	    },
	    {
	      "id": "389",
	      "title": "Newtown (D)",
	      "year": "2016",
	      "imdb": "5278578"
	    },
	    {
	      "id": "390",
	      "title": "Trapped (D)",
	      "year": "2016",
	      "imdb": "5259692"
	    },
	    {
	      "id": "391",
	      "title": "Fire at Sea (D)",
	      "year": "2016",
	      "imdb": "3652526"
	    },
	    {
	      "id": "392",
	      "title": "Amanda Knox (D)",
	      "year": "2016",
	      "imdb": "5952332"
	    },
	    {
	      "id": "393",
	      "title": "I Am Not Your Negro (D)",
	      "year": "2016",
	      "imdb": "5804038"
	    },
	    {
	      "id": "394",
	      "title": "Zero Days (D)",
	      "year": "2016",
	      "imdb": "5446858"
	    },
	    {
	      "id": "395",
	      "title": "Captain America: Civil War",
	      "year": "2016",
	      "imdb": "3498820"
	    },
	    {
	      "id": "396",
	      "title": "Batman v Superman: Dawn of Justice",
	      "year": "2016",
	      "imdb": "2975590"
	    },
	    {
	      "id": "397",
	      "title": "Fantastic Beasts and Where to Find Them",
	      "year": "2016",
	      "imdb": "3183660"
	    },
	    {
	      "id": "398",
	      "title": "Doctor Strange",
	      "year": "2016",
	      "imdb": "1211837"
	    },
	    {
	      "id": "399",
	      "title": "Kung Fu Panda 3 (A)",
	      "year": "2016",
	      "imdb": "2267968"
	    },
	    {
	      "id": "400",
	      "title": "Jason Bourne",
	      "year": "2016",
	      "imdb": "4196776"
	    },
	    {
	      "id": "401",
	      "title": "Independence Day: Resurgence",
	      "year": "2016",
	      "imdb": "1628841"
	    },
	    {
	      "id": "402",
	      "title": "Star Trek Beyond",
	      "year": "2016",
	      "imdb": "2660888"
	    },
	    {
	      "id": "403",
	      "title": "The Conjuring 2",
	      "year": "2016",
	      "imdb": "3065204"
	    },
	    {
	      "id": "404",
	      "title": "The Mermaid (F)",
	      "year": "2016",
	      "imdb": "4701660"
	    },
	    {
	      "id": "405",
	      "title": "Alice Through the Looking Glass",
	      "year": "2016",
	      "imdb": "2567026"
	    },
	    {
	      "id": "406",
	      "title": "Ghostbusters",
	      "year": "2016",
	      "imdb": "1289401"
	    },
	    {
	      "id": "407",
	      "title": "The Monkey King 2 (F)",
	      "year": "2016",
	      "imdb": "4591310"
	    },
	    {
	      "id": "408",
	      "title": "The Handmaiden (F)",
	      "year": "2016",
	      "imdb": "4016934"
	    },
	    {
	      "id": "409",
	      "title": "The Magnificent Seven",
	      "year": "2016",
	      "imdb": "2404435"
	    },
	    {
	      "id": "410",
	      "title": "Jack Reacher: Never Go Back",
	      "year": "2016",
	      "imdb": "3393786"
	    },
	    {
	      "id": "411",
	      "title": "The BFG",
	      "year": "2016",
	      "imdb": "3691740"
	    },
	    {
	      "id": "412",
	      "title": "The Accountant",
	      "year": "2016",
	      "imdb": "2140479"
	    },
	    {
	      "id": "413",
	      "title": "Sausage Party (A)",
	      "year": "2016",
	      "imdb": "1700841"
	    },
	    {
	      "id": "414",
	      "title": "Passengers",
	      "year": "2016",
	      "imdb": "1355644"
	    },
	    {
	      "id": "415",
	      "title": "10 Cloverfield Lane",
	      "year": "2016",
	      "imdb": "1179933"
	    },
	    {
	      "id": "416",
	      "title": "Assassins Creed",
	      "year": "2016",
	      "imdb": "2094766"
	    },
	    {
	      "id": "417",
	      "title": "Collateral Beauty",
	      "year": "2016",
	      "imdb": "4682786"
	    },
	    {
	      "id": "418",
	      "title": "Wiener (D)",
	      "year": "2016",
	      "imdb": "5278596"
	    },
	    {
	      "id": "419",
	      "title": "The Ivory Game (D)",
	      "year": "2016",
	      "imdb": "5952266"
	    },
	    {
	      "id": "420",
	      "title": "Snowden",
	      "year": "2016",
	      "imdb": "3774114"
	    },
	    {
	      "id": "421",
	      "title": "Deepwater Horizon",
	      "year": "2016",
	      "imdb": "1860357"
	    },
	    {
	      "id": "426",
	      "title": "Suicide Squad",
	      "year": "2016",
	      "imdb": "1386697"
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

                $films = json_decode($this->films);

                DB::table('films')->truncate();

                foreach ($films->films as $f) {
                        DB::table('films')->insert(
                            array(
                                'id'    => $f->id,
                                'title' => $f->title,
                                'year'  => $f->year,
                                'imdb'  => $f->imdb
                                )
                        );
                }

                DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
}
