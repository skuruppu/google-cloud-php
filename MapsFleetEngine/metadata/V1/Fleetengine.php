<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/fleetengine.proto

namespace GPBMetadata\Google\Maps\Fleetengine\V1;

class Fleetengine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\V1\Traffic::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/maps/fleetengine/v1/fleetengine.protomaps.fleetengine.v1(google/maps/fleetengine/v1/traffic.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/latlng.proto"b
TerminalPointId
place_id (	BH 
generated_id (	BH 
value (	B:B
Id"�
TerminalLocation\'
point (2.google.type.LatLngB�AC
terminal_point_id (2$.maps.fleetengine.v1.TerminalPointIdB
access_point_id (	B
trip_id (	BE
terminal_location_type (2!.maps.fleetengine.v1.WaypointTypeB"�
TripWaypoint7
location (2%.maps.fleetengine.v1.TerminalLocation
trip_id (	8
waypoint_type (2!.maps.fleetengine.v1.WaypointType-
path_to_waypoint (2.google.type.LatLng 
encoded_path_to_waypoint (	K
traffic_to_waypoint
 (2..maps.fleetengine.v1.ConsumableTrafficPolyline4
distance_meters (2.google.protobuf.Int32Value\'
eta (2.google.protobuf.Timestamp+
duration (2.google.protobuf.Duration"�
VehicleAttribute
key (	
value (	
string_value (	H 

bool_value (H 
number_value (H B
vehicle_attribute_value"�
VehicleLocation%
location (2.google.type.LatLng=
horizontal_accuracy (2.google.protobuf.DoubleValueB5
latlng_accuracy (2.google.protobuf.DoubleValue,
heading (2.google.protobuf.Int32Value:
bearing_accuracy
 (2.google.protobuf.DoubleValueB6
heading_accuracy (2.google.protobuf.DoubleValue.
altitude (2.google.protobuf.DoubleValue;
vertical_accuracy	 (2.google.protobuf.DoubleValueB7
altitude_accuracy (2.google.protobuf.DoubleValue3

speed_kmph (2.google.protobuf.Int32ValueB+
speed (2.google.protobuf.DoubleValue4
speed_accuracy (2.google.protobuf.DoubleValue/
update_time (2.google.protobuf.Timestamp4
server_time (2.google.protobuf.TimestampB�A<
location_sensor (2#.maps.fleetengine.v1.LocationSensor3
is_road_snapped (2.google.protobuf.BoolValue>
is_gps_sensor_enabled (2.google.protobuf.BoolValueB�A;
time_since_update (2.google.protobuf.Int32ValueB�A=
num_stale_updates (2.google.protobuf.Int32ValueB�A)
raw_location (2.google.type.LatLng5
raw_location_time (2.google.protobuf.Timestamp@
raw_location_sensor (2#.maps.fleetengine.v1.LocationSensor;
raw_location_accuracy (2.google.protobuf.DoubleValue2
supplemental_location (2.google.type.LatLng>
supplemental_location_time (2.google.protobuf.TimestampI
supplemental_location_sensor (2#.maps.fleetengine.v1.LocationSensorD
supplemental_location_accuracy (2.google.protobuf.DoubleValue
road_snapped (B*<
TripType
UNKNOWN_TRIP_TYPE 

SHARED
	EXCLUSIVE*�
WaypointType
UNKNOWN_WAYPOINT_TYPE 
PICKUP_WAYPOINT_TYPE
DROP_OFF_WAYPOINT_TYPE*
&INTERMEDIATE_DESTINATION_WAYPOINT_TYPE*_
PolylineFormatType
UNKNOWN_FORMAT_TYPE 
LAT_LNG_LIST_TYPE
ENCODED_POLYLINE_TYPE*�
NavigationStatus
UNKNOWN_NAVIGATION_STATUS 
NO_GUIDANCE
ENROUTE_TO_DESTINATION
	OFF_ROUTE
ARRIVED_AT_DESTINATION*�
LocationSensor
UNKNOWN_SENSOR 
GPS
NETWORK
PASSIVE"
ROAD_SNAPPED_LOCATION_PROVIDER
CUSTOMER_SUPPLIED_LOCATION
FLEET_ENGINE_LOCATION
FUSED_LOCATION_PROVIDERd
CORE_LOCATION�B�
com.google.maps.fleetengine.v1BFleetEnginePZFcloud.google.com/go/maps/fleetengine/apiv1/fleetenginepb;fleetenginepb�CFE�Google.Maps.FleetEngine.V1�Google\\Maps\\FleetEngine\\V1�Google::Maps::FleetEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

