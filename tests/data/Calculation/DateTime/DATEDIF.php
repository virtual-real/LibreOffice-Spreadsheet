<?php

return [
    [365, '"2016-01-01", "2016-12-31", "YD"'],
    [364, '"2015-01-01", "2015-12-31", "YD"'],
    [364, '"2015-01-01", "2016-12-31", "YD"'],
    [365, '"2016-01-01", "2017-12-31", "YD"'],
    [364, '"2017-01-01", "2018-12-31", "YD"'],
    ['#VALUE!', '"ABC", "2007-1-10", "Y"'],
    ['#VALUE!', '"2007-1-1", "DEF", "Y"'],
    ['#VALUE!', '"2007-1-1", "2007-1-10", "XYZ"'],
    ['#NUM!', '"2007-1-10", "2007-1-1", "Y"'],
    [0, '"2007-12-31", "2008-1-10", "Y"'],
    [0, '"2007-1-1", "2007-1-10", "Y"'],
    [0, '"2007-1-1", "2007-1-10", "M"'],
    [9, '"2007-1-1", "2007-1-10", "D"'],
    [0, '"2007-1-1", "2007-1-10", "YM"'],
    [9, '"2007-1-1", "2007-1-10", "YD"'],
    [9, '"2007-1-1", "2007-1-10", "MD"'],
    [0, '"2007-1-1", "2007-12-31", "Y"'],
    [11, '"2007-1-1", "2007-12-31", "M"'],
    [364, '"2007-1-1", "2007-12-31", "D"'],
    [11, '"2007-1-1", "2007-12-31", "YM"'],
    [364, '"2007-1-1", "2007-12-31", "YD"'],
    [30, '"2007-1-1", "2007-12-31", "MD"'],
    [1, '"2007-1-1", "2008-7-1", "Y"'],
    [18, '"2007-1-1", "2008-7-1", "M"'],
    [547, '"2007-1-1", "2008-7-1", "D"'],
    [6, '"2007-1-1", "2008-7-1", "YM"'],
    [181, '"2007-1-1", "2008-7-1", "YD"'],
    [0, '"2007-1-1", "2008-7-1", "MD"'],
    [0, '"2007-1-1", "2007-1-31", "Y"'],
    [0, '"2007-1-1", "2007-1-31", "M"'],
    [30, '"2007-1-1", "2007-1-31", "D"'],
    [0, '"2007-1-1", "2007-1-31", "YM"'],
    [30, '"2007-1-1", "2007-1-31", "YD"'],
    [30, '"2007-1-1", "2007-1-31", "MD"'],
    [0, '"2007-1-1", "2007-2-1", "Y"'],
    [1, '"2007-1-1", "2007-2-1", "M"'],
    [31, '"2007-1-1", "2007-2-1", "D"'],
    [1, '"2007-1-1", "2007-2-1", "YM"'],
    [31, '"2007-1-1", "2007-2-1", "YD"'],
    [0, '"2007-1-1", "2007-2-1", "MD"'],
    [0, '"2007-1-1", "2007-2-28", "Y"'],
    [1, '"2007-1-1", "2007-2-28", "M"'],
    [58, '"2007-1-1", "2007-2-28", "D"'],
    [1, '"2007-1-1", "2007-2-28", "YM"'],
    [58, '"2007-1-1", "2007-2-28", "YD"'],
    [27, '"2007-1-1", "2007-2-28", "MD"'],
    [0, '"2007-1-31", "2007-2-1", "Y"'],
    [0, '"2007-1-31", "2007-2-1", "M"'],
    [1, '"2007-1-31", "2007-2-1", "D"'],
    [0, '"2007-1-31", "2007-2-1", "YM"'],
    [1, '"2007-1-31", "2007-2-1", "YD"'],
    [1, '"2007-1-31", "2007-2-1", "MD"'],
    [0, '"2007-1-31", "2007-3-1", "Y"'],
    [1, '"2007-1-31", "2007-3-1", "M"'],
    [29, '"2007-1-31", "2007-3-1", "D"'],
    [1, '"2007-1-31", "2007-3-1", "YM"'],
    [29, '"2007-1-31", "2007-3-1", "YD"'],
    [-2, '"2007-1-31", "2007-3-1", "MD"'],
    [0, '"2007-1-31", "2007-3-31", "Y"'],
    [2, '"2007-1-31", "2007-3-31", "M"'],
    [59, '"2007-1-31", "2007-3-31", "D"'],
    [2, '"2007-1-31", "2007-3-31", "YM"'],
    [59, '"2007-1-31", "2007-3-31", "YD"'],
    [0, '"2007-1-31", "2007-3-31", "MD"'],
    [0, '"2008-1-1", "2008-9-1", "Y"'],
    [8, '"2008-1-1", "2008-9-1", "M"'],
    [244, '"2008-1-1", "2008-9-1", "D"'],
    [8, '"2008-1-1", "2008-9-1", "YM"'],
    [244, '"2008-1-1", "2008-9-1", "YD"'],
    [0, '"2008-1-1", "2008-9-1", "MD"'],
    [1, '"2007-2-1", "2008-4-1", "Y"'],
    [14, '"2007-2-1", "2008-4-1", "M"'],
    [425, '"2007-2-1", "2008-4-1", "D"'],
    [2, '"2007-2-1", "2008-4-1", "YM"'],
    [59, '"2007-2-1", "2008-4-1", "YD"'],
    [0, '"2007-2-1", "2008-4-1", "MD"'],
    [47, '"1960-12-19", "2008-6-28", "Y"'],
    [570, '"1960-12-19", "2008-6-28", "M"'],
    [17358, '"1960-12-19", "2008-6-28", "D"'],
    [6, '"1960-12-19", "2008-6-28", "YM"'],
    [191, '"1960-12-19", "2008-6-28", "YD"'],
    [9, '"1960-12-19", "2008-6-28", "MD"'],
    [25, '"1982-12-7", "2008-6-28", "Y"'],
    [306, '"1982-12-7", "2008-6-28", "M"'],
    [9335, '"1982-12-7", "2008-6-28", "D"'],
    [6, '"1982-12-7", "2008-6-28", "YM"'],
    [203, '"1982-12-7", "2008-6-28", "YD"'],
    [21, '"1982-12-7", "2008-6-28", "MD"'],
    [2, '"2007-12-25", "2010-3-17", "Y"'],
    [26, '"2007-12-25", "2010-3-17", "M"'],
    [813, '"2007-12-25", "2010-3-17", "D"'],
    [2, '"2007-12-25", "2010-3-17", "YM"'],
    [82, '"2007-12-25", "2010-3-17", "YD"'],
    [20, '"2007-12-25", "2010-3-17", "MD"'],
    [51, '"19-12-1960", "26-01-2012", "Y"'],
    [613, '"19-12-1960", "26-01-2012", "M"'],
    [18665, '"19-12-1960", "26-01-2012", "D"'],
    [1, '"19-12-1960", "26-01-2012", "YM"'],
    [11, '"19-12-1960", "26-11-1962", "YM"'],
    [38, '"19-12-1960", "26-01-2012", "YD"'],
    [7, '"19-12-1960", "26-01-2012", "MD"'],
    [0, '"19-12-1960", "12-12-1961", "Y"'],
    [1, '"19-12-1960", "12-12-1962", "Y"'],
    [51, '"19-12-1960", "12-12-2012", "Y"'],
    [0, '"1982-12-07", "1982-12-7", "D"'],
    [244, '"2008-1-1", "2008-9-1"'], // default unit is D
    ['exception', '"2008-1-1"'],
    ['exception', ''],
];
