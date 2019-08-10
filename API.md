# OverTrack OWL Clip API

This API retrieves data pertaining to Overwatch League clips that were automated by OverTrack. The clips can be filtered by various details such as primary player and hero, number of kills, and season.

The endpoint for this API is `https://api2.overtrack.gg/owl/clips`. An example request is provided at the bottom of this file.

## Clips Request Format

**URL :** `/owl/clips`

**Method :** `GET`

**Query String Parameters :**

* **Optional**

    `limit=[integer]` the maximum number of results to fetch
    
    `player=[string]`
    
    `hero=[string]`
    
    `team=[string]` the player's team
    
    `opponent=[string]` the opponent team
    
    `season=[integer]`
    
    `stage=[integer]`
    
    `week=[integer]`
    
    `day=[integer]`
    
    `min_kills=[integer]` and `max_kills=[integer]`
    
    `min_duration=[integer]` and `max_duration=[integer]`
    
    `min_season=[integer]` and `max_season=[integer]`
    
    `min_stage=[integer]` and `max_stage=[integer]`
    
    `min_week=[integer]` and `max_week=[integer]`
    
    `min_day=[integer]` and `max_day=[integer]`
    
* **Incomplete**

    `type=["kills"]` selects the type of clips (currently only kill clips)
    
    `pov=[true]` selects the viewing angle of the clips (currently only point of view clips)

**Success Response :**

* **Code :** 200

* **Content (no results) :**

    ```json
    {"clips": []}
    ```
    
* **Content (with results) :**

    ```json
    {
      "clips": [
        {
          "url": "string (the URL for the clip on Twitch)",
          "player": "string",
          "hero": "string",
          "kill_count": "integer",
          "game_name": "string (stream title at time of clip)",
          "team": "string",
          "opponent_team": "string",
          "victims": [
            {
              "hero": "string",
              "name": "string"
            },
          ],
          "season": "integer",
          "stage": "integer",
          "week": "integer",
          "day": "integer",
          "duration": "integer (seconds)",
          "time": "float (unix time)",
          "pov": "true (incomplete)",
          "type": "'kills' (incomplete)"
        }
      ]
    }
    ```

## Sample Call

**`GET` request :** `https://api2.overtrack.gg/owl/clips?player=GODSB&hero=PHARAH&min_kills=4`

**Response :**

```json
{
  "clips": [
    {
      "day": 2,
      "duration": 22,
      "game_name": "2019 Season | Stage 4 Week 3 Day 2 | Hangzhou Spark vs. New York Excelsior",
      "hero": "PHARAH",
      "kill_count": 5,
      "opponent_team": "New York Excelsior",
      "player": "GODSB",
      "pov": true,
      "season": 2019,
      "stage": 4,
      "team": "Hangzhou Spark",
      "time": 3130800346.0144997,
      "type": "kills",
      "url": "https://clips.twitch.tv/SpookyHonestShrimpRlyTho",
      "victims": [
        {
          "hero": "sombra",
          "name": "LIBERO"
        },
        {
          "hero": "moira",
          "name": "JJONAK"
        },
        {
          "hero": "dva",
          "name": "MEKO"
        },
        {
          "hero": "reaper",
          "name": "NENNE"
        },
        {
          "hero": "hammond",
          "name": "MANO"
        }
      ],
      "week": 3
    }
  ]
}
```
