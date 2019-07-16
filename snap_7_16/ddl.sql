create table task(
   taskId binary(20) not null,
   taskTitle varchar(255),
   taskStartDate DATETIME,
   taskDueDate DATETIME,
   taskStatus varchar(64) not null,
   taskPriority VARCHAR(64) not null,
   taskDescription VARCHAR(256),
   primary key (taskId)
);

SELECT tweet.tweetcontent, profile.profileAtHandle
FROM tweet
     INNER JOIN `like` ON tweet.tweetId = like.likeTweetId
     INNER JOIN profile ON like.likeProfileId = profile.profileId;