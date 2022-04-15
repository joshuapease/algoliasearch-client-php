package com.algolia.api;

import com.algolia.ApiCallback;
import com.algolia.ApiClient;
import com.algolia.ApiResponse;
import com.algolia.Pair;
import com.algolia.exceptions.*;
import com.algolia.model.personalization.*;
import com.algolia.utils.*;
import com.algolia.utils.echo.*;
import com.algolia.utils.retry.CallType;
import com.algolia.utils.retry.StatefulHost;
import com.google.gson.reflect.TypeToken;
import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.EnumSet;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import okhttp3.Call;

public class PersonalizationApi extends ApiClient {

  public PersonalizationApi(String appId, String apiKey, String region) {
    this(appId, apiKey, new HttpRequester(getDefaultHosts(region)), null);
  }

  public PersonalizationApi(
    String appId,
    String apiKey,
    String region,
    UserAgent.Segment[] userAgentSegments
  ) {
    this(
      appId,
      apiKey,
      new HttpRequester(getDefaultHosts(region)),
      userAgentSegments
    );
  }

  public PersonalizationApi(String appId, String apiKey, Requester requester) {
    this(appId, apiKey, requester, null);
  }

  public PersonalizationApi(
    String appId,
    String apiKey,
    Requester requester,
    UserAgent.Segment[] userAgentSegments
  ) {
    super(appId, apiKey, requester, "Personalization", userAgentSegments);
  }

  private static List<StatefulHost> getDefaultHosts(String region) {
    List<StatefulHost> hosts = new ArrayList<StatefulHost>();
    hosts.add(
      new StatefulHost(
        "personalization." +
        (region == null ? "" : region + ".") +
        "algolia.com",
        "https",
        EnumSet.of(CallType.READ, CallType.WRITE)
      )
    );
    return hosts;
  }

  /**
   * Build call for del
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call delCall(
    String path,
    Map<String, Object> parameters,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = null;

    // create path and map variables
    String requestPath = "/1{path}".replaceAll("\\{path\\}", path.toString());

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    if (parameters != null) {
      for (Map.Entry<String, Object> parameter : parameters.entrySet()) {
        queryParams.addAll(
          this.parameterToPair(parameter.getKey(), parameter.getValue())
        );
      }
    }

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "DELETE",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call delValidateBeforeCall(
    String path,
    Map<String, Object> parameters,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'path' is set
    if (path == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'path' when calling del(Async)"
      );
    }

    return delCall(path, parameters, callback);
  }

  /**
   * This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @return Object
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public Object del(String path, Map<String, Object> parameters)
    throws AlgoliaRuntimeException {
    Call req = delValidateBeforeCall(path, parameters, null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.Del(((CallEcho) req).request());
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<Object>() {}.getType();
    ApiResponse<Object> res = this.execute(call, returnType);
    return res.getData();
  }

  public Object del(String path) throws AlgoliaRuntimeException {
    return this.del(path, new HashMap<>());
  }

  /**
   * (asynchronously) This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call delAsync(
    String path,
    Map<String, Object> parameters,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Call call = delValidateBeforeCall(path, parameters, callback);
    Type returnType = new TypeToken<Object>() {}.getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for deleteUserProfile
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call deleteUserProfileCall(
    String userToken,
    final ApiCallback<DeleteUserProfileResponse> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = null;

    // create path and map variables
    String requestPath =
      "/1/profiles/{userToken}".replaceAll(
          "\\{userToken\\}",
          this.escapeString(userToken.toString())
        );

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "DELETE",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call deleteUserProfileValidateBeforeCall(
    String userToken,
    final ApiCallback<DeleteUserProfileResponse> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'userToken' is set
    if (userToken == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'userToken' when calling deleteUserProfile(Async)"
      );
    }

    return deleteUserProfileCall(userToken, callback);
  }

  /**
   * Returns, as part of the response, a date until which the data can safely be considered as
   * deleted for the given user. This means that if you send events for the given user before this
   * date, they will be ignored. Any data received after the deletedUntil date will start building a
   * new user profile. It might take a couple hours before for the deletion request to be fully
   * processed.
   *
   * @param userToken userToken representing the user for which to fetch the Personalization
   *     profile. (required)
   * @return DeleteUserProfileResponse
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public DeleteUserProfileResponse deleteUserProfile(String userToken)
    throws AlgoliaRuntimeException {
    Call req = deleteUserProfileValidateBeforeCall(userToken, null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.DeleteUserProfile(
        ((CallEcho) req).request()
      );
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<DeleteUserProfileResponse>() {}.getType();
    ApiResponse<DeleteUserProfileResponse> res = this.execute(call, returnType);
    return res.getData();
  }

  /**
   * (asynchronously) Returns, as part of the response, a date until which the data can safely be
   * considered as deleted for the given user. This means that if you send events for the given user
   * before this date, they will be ignored. Any data received after the deletedUntil date will
   * start building a new user profile. It might take a couple hours before for the deletion request
   * to be fully processed.
   *
   * @param userToken userToken representing the user for which to fetch the Personalization
   *     profile. (required)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call deleteUserProfileAsync(
    String userToken,
    final ApiCallback<DeleteUserProfileResponse> callback
  ) throws AlgoliaRuntimeException {
    Call call = deleteUserProfileValidateBeforeCall(userToken, callback);
    Type returnType = new TypeToken<DeleteUserProfileResponse>() {}.getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for get
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call getCall(
    String path,
    Map<String, Object> parameters,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = null;

    // create path and map variables
    String requestPath = "/1{path}".replaceAll("\\{path\\}", path.toString());

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    if (parameters != null) {
      for (Map.Entry<String, Object> parameter : parameters.entrySet()) {
        queryParams.addAll(
          this.parameterToPair(parameter.getKey(), parameter.getValue())
        );
      }
    }

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "GET",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call getValidateBeforeCall(
    String path,
    Map<String, Object> parameters,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'path' is set
    if (path == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'path' when calling get(Async)"
      );
    }

    return getCall(path, parameters, callback);
  }

  /**
   * This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @return Object
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public Object get(String path, Map<String, Object> parameters)
    throws AlgoliaRuntimeException {
    Call req = getValidateBeforeCall(path, parameters, null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.Get(((CallEcho) req).request());
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<Object>() {}.getType();
    ApiResponse<Object> res = this.execute(call, returnType);
    return res.getData();
  }

  public Object get(String path) throws AlgoliaRuntimeException {
    return this.get(path, new HashMap<>());
  }

  /**
   * (asynchronously) This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call getAsync(
    String path,
    Map<String, Object> parameters,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Call call = getValidateBeforeCall(path, parameters, callback);
    Type returnType = new TypeToken<Object>() {}.getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for getPersonalizationStrategy
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call getPersonalizationStrategyCall(
    final ApiCallback<PersonalizationStrategyParams> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = null;

    // create path and map variables
    String requestPath = "/1/strategies/personalization";

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "GET",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call getPersonalizationStrategyValidateBeforeCall(
    final ApiCallback<PersonalizationStrategyParams> callback
  ) throws AlgoliaRuntimeException {
    return getPersonalizationStrategyCall(callback);
  }

  /**
   * The strategy contains information on the events and facets that impact user profiles and
   * personalized search results.
   *
   * @return PersonalizationStrategyParams
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public PersonalizationStrategyParams getPersonalizationStrategy()
    throws AlgoliaRuntimeException {
    Call req = getPersonalizationStrategyValidateBeforeCall(null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.GetPersonalizationStrategy(
        ((CallEcho) req).request()
      );
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<PersonalizationStrategyParams>() {}
      .getType();
    ApiResponse<PersonalizationStrategyParams> res =
      this.execute(call, returnType);
    return res.getData();
  }

  /**
   * (asynchronously) The strategy contains information on the events and facets that impact user
   * profiles and personalized search results.
   *
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call getPersonalizationStrategyAsync(
    final ApiCallback<PersonalizationStrategyParams> callback
  ) throws AlgoliaRuntimeException {
    Call call = getPersonalizationStrategyValidateBeforeCall(callback);
    Type returnType = new TypeToken<PersonalizationStrategyParams>() {}
      .getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for getUserTokenProfile
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call getUserTokenProfileCall(
    String userToken,
    final ApiCallback<GetUserTokenResponse> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = null;

    // create path and map variables
    String requestPath =
      "/1/profiles/personalization/{userToken}".replaceAll(
          "\\{userToken\\}",
          this.escapeString(userToken.toString())
        );

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "GET",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call getUserTokenProfileValidateBeforeCall(
    String userToken,
    final ApiCallback<GetUserTokenResponse> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'userToken' is set
    if (userToken == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'userToken' when calling getUserTokenProfile(Async)"
      );
    }

    return getUserTokenProfileCall(userToken, callback);
  }

  /**
   * The profile is structured by facet name used in the strategy. Each facet value is mapped to its
   * score. Each score represents the user affinity for a specific facet value given the userToken
   * past events and the Personalization strategy defined. Scores are bounded to 20. The last
   * processed event timestamp is provided using the ISO 8601 format for debugging purposes.
   *
   * @param userToken userToken representing the user for which to fetch the Personalization
   *     profile. (required)
   * @return GetUserTokenResponse
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public GetUserTokenResponse getUserTokenProfile(String userToken)
    throws AlgoliaRuntimeException {
    Call req = getUserTokenProfileValidateBeforeCall(userToken, null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.GetUserTokenProfile(
        ((CallEcho) req).request()
      );
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<GetUserTokenResponse>() {}.getType();
    ApiResponse<GetUserTokenResponse> res = this.execute(call, returnType);
    return res.getData();
  }

  /**
   * (asynchronously) The profile is structured by facet name used in the strategy. Each facet value
   * is mapped to its score. Each score represents the user affinity for a specific facet value
   * given the userToken past events and the Personalization strategy defined. Scores are bounded to
   * 20. The last processed event timestamp is provided using the ISO 8601 format for debugging
   * purposes.
   *
   * @param userToken userToken representing the user for which to fetch the Personalization
   *     profile. (required)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call getUserTokenProfileAsync(
    String userToken,
    final ApiCallback<GetUserTokenResponse> callback
  ) throws AlgoliaRuntimeException {
    Call call = getUserTokenProfileValidateBeforeCall(userToken, callback);
    Type returnType = new TypeToken<GetUserTokenResponse>() {}.getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for post
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call postCall(
    String path,
    Map<String, Object> parameters,
    Object body,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = body;

    // create path and map variables
    String requestPath = "/1{path}".replaceAll("\\{path\\}", path.toString());

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    if (parameters != null) {
      for (Map.Entry<String, Object> parameter : parameters.entrySet()) {
        queryParams.addAll(
          this.parameterToPair(parameter.getKey(), parameter.getValue())
        );
      }
    }

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "POST",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call postValidateBeforeCall(
    String path,
    Map<String, Object> parameters,
    Object body,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'path' is set
    if (path == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'path' when calling post(Async)"
      );
    }

    return postCall(path, parameters, body, callback);
  }

  /**
   * This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @param body The parameters to send with the custom request. (optional)
   * @return Object
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public Object post(String path, Map<String, Object> parameters, Object body)
    throws AlgoliaRuntimeException {
    Call req = postValidateBeforeCall(path, parameters, body, null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.Post(((CallEcho) req).request());
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<Object>() {}.getType();
    ApiResponse<Object> res = this.execute(call, returnType);
    return res.getData();
  }

  public Object post(String path) throws AlgoliaRuntimeException {
    return this.post(path, new HashMap<>(), null);
  }

  /**
   * (asynchronously) This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @param body The parameters to send with the custom request. (optional)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call postAsync(
    String path,
    Map<String, Object> parameters,
    Object body,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Call call = postValidateBeforeCall(path, parameters, body, callback);
    Type returnType = new TypeToken<Object>() {}.getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for put
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call putCall(
    String path,
    Map<String, Object> parameters,
    Object body,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = body;

    // create path and map variables
    String requestPath = "/1{path}".replaceAll("\\{path\\}", path.toString());

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    if (parameters != null) {
      for (Map.Entry<String, Object> parameter : parameters.entrySet()) {
        queryParams.addAll(
          this.parameterToPair(parameter.getKey(), parameter.getValue())
        );
      }
    }

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "PUT",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call putValidateBeforeCall(
    String path,
    Map<String, Object> parameters,
    Object body,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'path' is set
    if (path == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'path' when calling put(Async)"
      );
    }

    return putCall(path, parameters, body, callback);
  }

  /**
   * This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @param body The parameters to send with the custom request. (optional)
   * @return Object
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public Object put(String path, Map<String, Object> parameters, Object body)
    throws AlgoliaRuntimeException {
    Call req = putValidateBeforeCall(path, parameters, body, null);
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.Put(((CallEcho) req).request());
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<Object>() {}.getType();
    ApiResponse<Object> res = this.execute(call, returnType);
    return res.getData();
  }

  public Object put(String path) throws AlgoliaRuntimeException {
    return this.put(path, new HashMap<>(), null);
  }

  /**
   * (asynchronously) This method allow you to send requests to the Algolia REST API.
   *
   * @param path The path of the API endpoint to target, anything after the /1 needs to be
   *     specified. (required)
   * @param parameters Query parameters to be applied to the current query. (optional)
   * @param body The parameters to send with the custom request. (optional)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call putAsync(
    String path,
    Map<String, Object> parameters,
    Object body,
    final ApiCallback<Object> callback
  ) throws AlgoliaRuntimeException {
    Call call = putValidateBeforeCall(path, parameters, body, callback);
    Type returnType = new TypeToken<Object>() {}.getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }

  /**
   * Build call for setPersonalizationStrategy
   *
   * @param callback Callback for upload/download progress
   * @return Call to execute
   * @throws AlgoliaRuntimeException If fail to serialize the request body object
   */
  private Call setPersonalizationStrategyCall(
    PersonalizationStrategyParams personalizationStrategyParams,
    final ApiCallback<SetPersonalizationStrategyResponse> callback
  ) throws AlgoliaRuntimeException {
    Object bodyObj = personalizationStrategyParams;

    // create path and map variables
    String requestPath = "/1/strategies/personalization";

    List<Pair> queryParams = new ArrayList<Pair>();
    Map<String, String> headers = new HashMap<String, String>();

    headers.put("Accept", "application/json");
    headers.put("Content-Type", "application/json");

    return this.buildCall(
        requestPath,
        "POST",
        queryParams,
        bodyObj,
        headers,
        callback
      );
  }

  private Call setPersonalizationStrategyValidateBeforeCall(
    PersonalizationStrategyParams personalizationStrategyParams,
    final ApiCallback<SetPersonalizationStrategyResponse> callback
  ) throws AlgoliaRuntimeException {
    // verify the required parameter 'personalizationStrategyParams' is set
    if (personalizationStrategyParams == null) {
      throw new AlgoliaRuntimeException(
        "Missing the required parameter 'personalizationStrategyParams' when calling" +
        " setPersonalizationStrategy(Async)"
      );
    }

    return setPersonalizationStrategyCall(
      personalizationStrategyParams,
      callback
    );
  }

  /**
   * A strategy defines the events and facets that impact user profiles and personalized search
   * results.
   *
   * @param personalizationStrategyParams (required)
   * @return SetPersonalizationStrategyResponse
   * @throws AlgoliaRuntimeException If fail to call the API, e.g. server error or cannot
   *     deserialize the response body
   */
  public SetPersonalizationStrategyResponse setPersonalizationStrategy(
    PersonalizationStrategyParams personalizationStrategyParams
  ) throws AlgoliaRuntimeException {
    Call req = setPersonalizationStrategyValidateBeforeCall(
      personalizationStrategyParams,
      null
    );
    if (req instanceof CallEcho) {
      return new EchoResponsePersonalization.SetPersonalizationStrategy(
        ((CallEcho) req).request()
      );
    }
    Call call = (Call) req;
    Type returnType = new TypeToken<SetPersonalizationStrategyResponse>() {}
      .getType();
    ApiResponse<SetPersonalizationStrategyResponse> res =
      this.execute(call, returnType);
    return res.getData();
  }

  /**
   * (asynchronously) A strategy defines the events and facets that impact user profiles and
   * personalized search results.
   *
   * @param personalizationStrategyParams (required)
   * @param callback The callback to be executed when the API call finishes
   * @return The request call
   * @throws AlgoliaRuntimeException If fail to process the API call, e.g. serializing the request
   *     body object
   */
  public Call setPersonalizationStrategyAsync(
    PersonalizationStrategyParams personalizationStrategyParams,
    final ApiCallback<SetPersonalizationStrategyResponse> callback
  ) throws AlgoliaRuntimeException {
    Call call = setPersonalizationStrategyValidateBeforeCall(
      personalizationStrategyParams,
      callback
    );
    Type returnType = new TypeToken<SetPersonalizationStrategyResponse>() {}
      .getType();
    this.executeAsync(call, returnType, callback);
    return call;
  }
}