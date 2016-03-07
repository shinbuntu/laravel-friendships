<?php

namespace Hootlex\Friendships\Contracts;

interface Friendable
{
    /**
     * @param Model $recipient
     *
     * @return \Hootlex\Friendships\Models\Friendship|false
     */
    public function befriend(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return bool
     */
    public function unfriend(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return bool
     */
    public function hasFriendRequestFrom(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return bool
     */
    public function isFriendWith(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return bool|int
     */
    public function acceptFriendRequest(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return bool|int
     */
    public function denyFriendRequest(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return \Hootlex\Friendships\Models\Friendship
     */
    public function blockFriend(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return mixed
     */
    public function unblockFriend(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return \Hootlex\Friendships\Models\Friendship
     */
    public function getFriendship(Model $recipient);

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllFriendships();

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     *
     */
    public function getPendingFriendships();

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAcceptedFriendships();

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     *
     */
    public function getDeniedFriendships();

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     *
     */
    public function getBlockedFriendships();

    /**
     * @param Model $recipient
     *
     * @return bool
     */
    public function hasBlocked(Model $recipient);

    /**
     * @param Model $recipient
     *
     * @return bool
     */
    public function isBlockedBy(Model $recipient);

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFriendRequests();

    /**
     * This method will not return Friendship models
     * It will return the 'friends' models. ex: App\User
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFriends();

    /**
     * Get the number of friends
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFriendsCount();

    /**
     * @param Model $recipient
     *
     * @return bool
     */
    public function canBefriend($recipient);

    /**
     * Get friends for the user
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function friends();

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function friendships();
}
