

def twitterRun():
    import time
    from datetime import datetime
    import json
    import TwitterSearch

    jsonFile = open("config.json") # to load the API keys and secrets
    jsonData = json.load(jsonFile)
    timelineSets = ["ChelseaFC", "Arsenal", "LiverpoolFC", "ManUtd", "ManCity", "premierleague"]
    tweetIdList = [] # to handle duplicate tweets
    ts = TwitterSearch.TwitterSearch(
        consumer_key = jsonData["twitter"]["consumer_key"],
        consumer_secret = jsonData["twitter"]["consumer_secret"],
        access_token = jsonData["twitter"]["access_token"],
        access_token_secret = jsonData["twitter"]["access_token_secret"]
     ) # keys are now loaded
    for club_name in timelineSets:
        twCount = 0
        fd = open(club_name+".txt","w")
        try:
            tuo = TwitterSearch.TwitterUserOrder(club_name)
            for tweet in ts.search_tweets_iterable(tuo):
                tweetId = str(tweet['id_str'])
                twCount += 1 # total tweets collected
                if twCount == 50:
                    break
                if tweetId in tweetIdList and "retweeted_status" in tweet.keys():
                    pass
                else:
                    tweetIdList.append(tweetId)
                    fd.write( tweetId+"\n" )
            print(twCount," tweets collected")
            print("---"*20)
        except Exception as e:
            print(datetime.now())
            print(e)
            print("---"*20)
        time.sleep(60)
        print(datetime.now())
        print("------"*20)
    fd.close()

twitterRun()
