const getKey = (obj, value) => Object.keys(obj).find(key => obj[key] === value);

export { getKey }