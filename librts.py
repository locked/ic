GRD_GRD = 0
GRD_WALL_H = 2
GRD_WALL_V = 3
GRD_WALL_HR = 4
GRD_WALL_HL = 5
GRD_WALL_VT = 6
GRD_WALL_VB = 7
GRD_WALL_CTL = 8
GRD_WALL_CTR = 9
GRD_WALL_CBL = 10
GRD_WALL_CBR = 11

GRD_SPICE = 20

MAP_WIDTH = 90
MAP_HEIGHT = 40

RTS_TICK = 0.04
CHECKPOINT = 360

TILE_SIZE = 24

SPICE_MAX_LEVEL = 10000

HALF_TILE_SIZE = 12
INTEGER_MAX = 9999999


def find_path(startpoint, endpoint, ground, method='astar'):
	import AStar
	
	path = []
	if method=='astar':
		astar = AStarJS( ground )
		path = astar.findPath(startpoint,endpoint)
	return path

